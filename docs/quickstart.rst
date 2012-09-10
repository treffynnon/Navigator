Quickstart Tutorial
===================

Please ensure you have completed the :doc:`installation instructions<installation>` for the Navigator library before continuing with these quickstart tutorials.

Super Simple Example
''''''''''''''''''''

This is the easiest way to get a quick distance between two points of the Earth in metres.

.. code-block:: php

    <?php
    use Treffynnon\Navigator as N;
    $distance = N::getDistance(10, 81.098, 15.6, '5° 10\' 11.009"W');

The function takes a sequence of latitude and longitude values:

.. function:: N::getDistance(lat1, long1, lat2, long2)

    Returns the distance in metres between the supplied points on Earth

    :param lat1: The latitude of point 1
    :type lat1: string or float
    :param long1: The longitude of point 1
    :type long1: string or float
    :param lat2: The latitude of point 2
    :type lat2: string or float
    :param long2: The longitude of point 2
    :type long2: string or float
    :rtype: float

A Slightly More Advanced Example
''''''''''''''''''''''''''''''''

To get more control over the setup of the distance calculation you can make use of the distance factory. The following snippet will give the `$distance` using the Haversine formula and converted to parsecs.

.. code-block:: php

    <?php
    use Treffynnon\Navigator as N;
    use Treffynnon\Navigator\Distance\Calculator\Haversine as H;
    use Treffynnon\Navigator\Distance\Converter\MetreToParsec as P;
    $Distance = N::distanceFactory(10, 81.098, 15.6, '5° 10\' 11.009"W');
    $distance = $Distance->get(new H, new P);

.. function:: N::distanceFactory(lat1, long1, lat2, long2)

    Get a distance instance pre-populated with the supplied sequence of latitude and longitude values

    :param lat1: The latitude of point 1
    :type lat1: string or float
    :param long1: The longitude of point 1
    :type long1: string or float
    :param lat2: The latitude of point 2
    :type lat2: string or float
    :param long2: The longitude of point 2
    :type long2: string or float
    :rtype: Treffynnon\Navigator\Distance
