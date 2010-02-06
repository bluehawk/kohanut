# Kohanut

The documentation can be found on the [website](http://kohanut.com).

changelog since 0.5.0

Kohanut_Element->type() has been renamed to factory() and supports two arguments
Kohanut_Element->$type has been made private and renamed to $_type, type() was added to get the element type
Kohanut_ELement->$unique is now protected and renamed to $_unique, unique() was added to get whether an element is unique.
Kohanut_Element->register() has been renamed to create_block()