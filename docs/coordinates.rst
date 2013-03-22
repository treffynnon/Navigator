Coordinates
===========

The coordinate class must be combined with :doc:`LatLong <latlong>` to create a point on the celestial bodies surfaces (most commonly this is the Earth). It handles the storage of a supplied coordinate value and its conversion to radians for internal use by :doc:`Calculators <distance>`.

This scheme makes it easy to supply a custom coordinate parser or specify whether to use `Decimal` or `Degrees Minutes Seconds` notation from the standard set of parsers.

.. code-block:: php

    <?php
    use Treffynnon\Navigator\Coordinate as C;
    $coord = new C('5° 10\' 11.009"W', new C\DmsParser);

Custom Parser
'''''''''''''

Creating a custom parser is as simple as extending `Treffynnon\\Navigator\\Coordinate\\ParserAbstract` like in this Radian parsing example

.. code-block:: php

    <?php
    namespace YourProject\Navigator\Coordinate;
    use Treffynnon\Navigator\Coordinate as C;
    class RadianParser extends C\ParserAbstract {
        public function parse($coord) {
            return $coord;
        }
        public function get($coord) {
            return $coord;
        }
    }

Then you can put it into action by injecting it into a coordinate instance

.. code-block:: php

    <?php
    use YourProject\Navigator\Coordinate as YPC;
    use Treffynnon\Navigator\Coordinate as C;
    $coord = new C(1.2175876579, new YPC\RadianParser);

Please note the namespace `YourProject\\Navigator\\Coordinate` should be changed to reflect the real names in your project.
