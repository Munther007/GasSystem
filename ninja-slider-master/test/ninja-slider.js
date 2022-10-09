(function ($) {
  'use strict';

  /*
    ======== A Handy Little QUnit Reference ========
    http://docs.jquery.com/QUnit

    Test methods:
      expect(numAssertions)
      stop(increment)
      start(decrement)
    Test assertions:
      ok(value, [message])
      equal(actual, expected, [message])
      notEqual(actual, expected, [message])
      deepEqual(actual, expected, [message])
      notDeepEqual(actual, expected, [message])
      strictEqual(actual, expected, [message])
      notStrictEqual(actual, expected, [message])
      raises(block, [expected], [message])
  */

  var
    list = [
      '0 dB - silence',
      '10 dB - calm breathing',
      '20-30 dB - very calm room',
      '40-60 dB - normal conversation',
      '60 dB - TV set at home level',
      '60-80 dB - Passenger car',
      '78 dB - hearing damage over time',
      '80-90 dB - traffic on a busy roadway',
      '100 dB - jack hammer',
      '120 dB - hearing damage immediately',
      '130 dB - threshold of pain',
      '150 dB - jet engine',
      '168 dB - M1 Garand rifle'
    ];

  module('constructor', {
    setup: function () {
      this.constructor = $.Ninja.Slider;
    }
  });

  test('exists', function () {
    ok(this.constructor, 'should exist');
  });

  test('is a function', function () {
    ok($.isFunction(this.constructor), 'should be a function');
  });

  module('instance', {
    setup: function () {
      this.instance = new $.Ninja.Slider('<input type="hidden"/>', {
        list: ['one', 'two', 'three']
      });
    }
  });

  test('is an instance', function () {
    ok(this.instance instanceof $.Ninja.Slider, 'should be instance of $.Ninja.Slider');
  });

  test('.$wrapper', function () {
    ok(this.instance.$wrapper, 'should exist');
    ok(this.instance.$wrapper.is('label'), 'should be a label element');
    ok(this.instance.$wrapper.hasClass('ninja-slider'), 'should have slider class');
  });

  test('.list', function () {
    ok(this.instance.list, 'should exist');
    ok($.isArray(this.instance.list), 'should be an array');
    strictEqual(this.instance.list[0], 'one', 'first element should match specified option');
  });

  test('.index', function () {
    strictEqual(this.instance.index, 0, 'should equal 0');
  });

  module('elements', {
    setup: function () {
      this.$elements = $('#qunit-fixture').find('input');
    }
  });

  test('are chainable', function () {
    strictEqual(this.$elements.ninja('slider', {
      list: []
    }), this.$elements, 'should be chainable');
  });

  module('default', {
    setup: function () {
      this.$element = $('#qunit-fixture').find('input.test-default');

      this.$element.ninja('slider', {
        list: list
      });
    }
  });

  QUnit.done(function () {
    $('#qunit-examples').find('input.test-default').ninja('slider', {
      list: list
    });
  });

  test('has wrapper', function () {
    var $wrapper = this.$element.parent();

    ok($wrapper.is('label'), 'should be a label element');

    ok($wrapper.hasClass('ninja-slider'), 'wrapper have slider class');
  });

  module('value', {
    setup: function () {
      this.$element = $('#qunit-fixture').find('input.test-value');

      this.$element.ninja('slider', {
        list: list
      });
    }
  });

  QUnit.done(function () {
    $('#qunit-examples').find('input.test-value').ninja('slider', {
      list: list
    });
  });

  module('binary', {
    setup: function () {
      this.$element = $('#qunit-fixture').find('input.test-binary');

      this.$element.ninja('slider', {
        list: [
          'off',
          'on'
        ]
      });
    }
  });

  QUnit.done(function () {
    $('#qunit-examples').find('input.test-binary').ninja('slider', {
      list: [
        'off',
        'on'
      ]
    });
  });

  test('has wrapper', function () {
    var $wrapper = this.$element.parent();

    ok($wrapper.is('label'), 'should be a label element');

    ok($wrapper.hasClass('ninja-slider'), 'wrapper have slider class');
  });

  module('width', {
    setup: function () {
      this.$element = $('#qunit-fixture').find('input.test-width');

      this.$element.ninja('slider', {
        list: list
      });
    }
  });

  QUnit.done(function () {
    $('#qunit-examples').find('input.test-width').ninja('slider', {
      list: list
    });
  });

  test('has wrapper', function () {
    var $wrapper = this.$element.parent();

    ok($wrapper.is('label'), 'should be a label element');

    ok($wrapper.hasClass('ninja-slider'), 'wrapper have slider class');
  });

}(window.jQuery));
