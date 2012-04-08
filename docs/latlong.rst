LatLong
=======

It is just a simple construct to combine coordinate instances into a latitude and longitude point. It will also prime the coordinate with its direction (either latitude or longitude). This can later be used by a parser to add in any meta information about a coordinate. This can be most easily seen the in the `get()` method of the DmsParser class.