Distance
========

When `Distance` is supplied with two instances of `LatLng` it can be used to calculate the distance between the points. It does this by using a `Calculator` such as `Great Circle` and optionally a unit converter such as `MetreToNauticalMile`::

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
    ?>

Specify the calculator and conversion on the `get()` method of `Distance`::

    <?php
    use Treffynnon\Navigator\Distance as D;
    $distance = $Distance->get(new D\Calculator\GreatCircle,
                               new D\Converter\MetreToNauticalMile);
    ?>
    
`$distance` now has the distance value calculated by Great Circle in Nautical Miles.

Calculators
'''''''''''

The Navigator library comes with four distance calculators by default:

- The Cosine Law
- Great Circle
- Haversine
- Vincenty

Of the selection Vincenty is the most accurate and also the default. It is the most computationally intensive, but not prohibitively so by any stretch.

Custom Calculators
''''''''''''''''''

As with coordinate parsers it is a trivial matter to create custom calculators.

Converters
''''''''''

