(function ($) {
  'use strict';

  $.Ninja.Slider = function (input, options) {
    var slider = this;

    if (input) {
      slider.$input = $(input);

      if (!slider.$input.is('input') || slider.$input.attr('type') !== 'hidden') {
        $.ninja.error('Slider may only be called with a hidden <input> input.');
      }
    } else {
      $.ninja.error('Slider must include a hidden <input> input.');
    }

    if (options) {
      if ('list' in options) {
        slider.list = options.list;

        slider.slots = slider.list.length - 1;

        if (slider.slots === 0) {
          $.ninja.error('Slider list must include at least two elements.');
        }
      } else {
        $.ninja.error('Slider must include a list option.');
      }

      if ('select' in options && $.isFunction(options.select)) {
        slider.select = options.select;
      }

      if (slider.$input.attr('value')) {
        slider.index = $.inArray(slider.$input.val(), slider.list);
      } else {
        slider.$input.val(slider.list[0]);
        slider.index = 0;
      }
    } else {
      $.ninja.error('Slider called without options.');
    }

    if (slider.$input.parent().is('label')) {
      slider.$wrapper = slider.$input.parent().addClass('ninja-slider');
    } else {
      slider.$wrapper = slider.$input.wrap('<label class="ninja-slider">').parent();
    }

    slider.width = slider.$wrapper.outerWidth();

    slider.increment = slider.width / slider.slots;

    slider.$level = $('<div>', {
      'class': 'ninja-level',
      css: {
        width: slider.left()
      }
    });

    slider.$groove = $('<div class="ninja-groove">').on('click.ninja', function (event) {
      slider.move(Math.round((event.pageX - slider.$track.offset().left) / slider.increment));

      slider.change();
    }).append(slider.$level);

    slider.$value = $('<span>', {
      'class': 'ninja-value',
      html: slider.list[slider.index]
    });

    slider.$button = $('<button>', {
      type: 'button',
      css: {
        left: slider.left()
      }
    }).on({
      'keyup.ninja': function (event) {
        var keycode = event.which;

        if ($.ninja.key(keycode, ['arrowLeft', 'arrowRight'])) {
          if (keycode === $.ninja.keys.arrowLeft) {
            slider.move(slider.index - 1);
          } else if (keycode === $.ninja.keys.arrowRight) {
            slider.move(slider.index + 1);
          }

          slider.change();
        }
      },
      'mousedown.ninja': function (event) {
        slider.$wrapper.addClass('ninja-active');

        slider.offsetX = event.pageX - Math.round(slider.$button.position().left);

        $(document).on({
          'mousemove.ninja': function (event) {
            slider.move(Math.round((event.pageX - slider.offsetX) / slider.increment));
          },
          'mouseup.ninja': function () {
            slider.change();

            slider.$wrapper.removeClass('ninja-active');

            $(document).off('mousemove.ninja mouseup.ninja');
          }
        });
      },
      'touchstart.ninja': function (event) {
        slider.$wrapper.addClass('ninja-active');

        slider.touch = event.originalEvent.targetTouches[0] || event.originalEvent.changedTouches[0];

        slider.offsetX = slider.touch.pageX - Math.round(slider.$button.position().left);
      },
      'touchmove.ninja': function (event) {
        event.preventDefault();

        slider.touch = event.originalEvent.targetTouches[0] || event.originalEvent.changedTouches[0];

        slider.move(Math.round((slider.touch.pageX - slider.offsetX) / slider.increment));
      },
      'touchend.ninja': function (event) {
        event.preventDefault();

        slider.$wrapper.removeClass('ninja-active');

        slider.change();
      }
    });

    slider.$track = $('<div>', {
      'class': 'ninja-track',
      css: {
        width: slider.width + 16
      }
    }).append(slider.$groove, slider.$button);

    slider.$wrapper.append(slider.$value, slider.$track);

    slider.drag = false;

    slider.offsetX = 0;

    slider.$input.data('ninja', {
      slider: options
    });
  };

  $.Ninja.Slider.prototype.change = function () {
    var value = this.list[this.index];

    if (this.$input.val() !== value) {
      this.$input.val(value).change();

      if ('select' in this) {
        this.select();
      }
    }
  };

  $.Ninja.Slider.prototype.left = function () {
    return Math.round(this.index * this.increment);
  };

  $.Ninja.Slider.prototype.move = function (index) {
    if (index !== this.index) {
      if (index < 0) {
        this.index = 0;
      } else if (index > this.slots) {
        this.index = this.slots;
      } else {
        this.index = index;
      }

      this.$button.css('left', this.left());
      this.$level.css('width', this.left());
      this.$value.text(this.list[this.index]);
    }
  };

  $.ninja.slider = function (input, options) {
    var $input = $(input);

    if ($input.data('ninja') && 'slider' in $input.data('ninja')) {
      $.ninja.warn('Slider called on the same input multiple times.');
    } else {
      $.extend(new $.Ninja(input, options), new $.Ninja.Slider(input, options));
    }
  };
}(jQuery));
