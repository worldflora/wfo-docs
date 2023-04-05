[[Concepts and the ICNAFP]]
[Rhakhis overview](rhakhis/Rhakhis overview.md)

This is the top level documentation for the World Flora Online Plant List system. It is an overview of how the data is modelled and the rules of the nomenclatural code are implemented.

It isn't a step by step guide to using the graphical interface, API or data downloads.

## Parts of the system

1. __Rhakhis__ is the editing system that keeps the top copy of data we are working on. There is a graphical user interface so that editors can view and change the data. There is also an administrative interface that is used for bulk imports of data.
1. __WFO Plant List API__ is the publishing system for data in Rhakhis. Every six months (on the solstices) a copy of the data in Rhakhis is transferred to the Plant List API for publication. Copies are also placed in ChecklistBank and Zenodo.

Here we discuss the data model used in Rhakhis. When the data is published to other into other formats (e.g. Darwin Core or the Catalogue of Life Data Package) then the concepts here are mapped to those used in the transfer format which may be slightly different. 

