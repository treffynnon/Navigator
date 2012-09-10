Distance
========

When `Distance` is supplied with two instances of `LatLng` it can be used to calculate the distance between the points. It does this by using a `Calculator` such as `Great Circle` and optionally a unit converter such as `MetreToNauticalMile`:

.. code-block:: php

    <?php
    use Treffynnon\Navigator as N;
    $coord1 = new N\LatLong(
        new N\Coordinate(10.9978),
        new N\Coordinate(35.6234)
    );
    $coord2 = new N\LatLong(
        new N\Coordinate(25),
        new N\Coordinate(-13.456)
    );
    $Distance = new N\Distance($coord1, $coord2);

Specify the calculator and conversion on the `get()` method of `Distance`:

.. code-block:: php

    <?php
    use Treffynnon\Navigator\Distance as D;
    $distance = $Distance->get(new D\Calculator\GreatCircle,
                               new D\Converter\MetreToNauticalMile);
    
`$distance` now has the distance value calculated by Great Circle in Nautical Miles.

Calculators
'''''''''''

The Navigator library comes with four distance calculators by default:

- The Cosine Law
- Great Circle
- Haversine
- Vincenty

Of the selection Vincenty is the most accurate and also the default. It is the most computationally intensive, but not prohibitively so by any stretch.

Celestial Bodies
^^^^^^^^^^^^^^^^

Most commonly and by default Navigator will be using Earth, but it can be altered by passing in a different `Celestial Body` such as `Mars` or the `Moon`:

.. code-block:: php

    <?php
    use Treffynnon\Navigator\CelestialBody\Mars as M;
    use Treffynnon\Navigator\Distance as D;
    $distance = $Distance->get(new D\Calculator\GreatCircle(new M),
                               new D\Converter\MetreToNauticalMile);

Custom Celestial Bodies
-----------------------

Custom celestial bodies are very simple to setup with a set of statistics - see `Treffynnon\\Navigator\\CelestialBody\\CelestialBodyAbstract` for more information.

Custom Calculators
^^^^^^^^^^^^^^^^^^

As with coordinate parsers it is a trivial matter to create custom calculators. Simply extend the abstract class - `Treffynnon\\Navigator\\Distance\\Calculator\\CalculatorAbstract`.

Converters
''''''''''

Converters can be used independently of the Navigator library or injected into the `Distance->get()` method. By default Navigator returns distances in metres, but this can be converted to the following units:

- Furlong
- Kilometre
- League
- Mile
- Nautical Mile
- Parsec

An example follows:

.. code-block:: php

    <?php
    use Treffynnon\Navigator\Distance\Converter\MetreToFurlong as F;
    $distance = $Distance->get(null, new F);

Custom Converters
^^^^^^^^^^^^^^^^^

As with custom calculators, but even simpler! See `Treffynnon\\Navigator\\Distance\\Converter\\ConverterAbstract`.
