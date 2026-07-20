---
title: Tech Manual
---

This is the starting point for documentation aimed at systems admins and developers of the World Flora Online.
Here we give an overview of how the different commponents interact. 
Details of the components themselves are given in the README.md files of their individual repositories.

- [Very high level overview](#very-high-level-overview)
- [Rhakhis](rhakhis.md) - the classification management application
- [Fyllo](https://github.com/worldflora/wfo-fyllo) - the content management application
- [Airflow](https://github.com/worldflora/wfo-airflow) - the workflow mamanagement application
- [WFO Plant List API](https://github.com/worldflora/wfo-plant-list) - the publishing mechanism that makes the latest released version of the WFO classification available via APIs.
- [New Public Website](https://github.com/worldflora/wfo-p2) - the new public facing website that combines the most recent classification from Rhakhis with the content from Fyllo. __This is currently under development__
- [Current deployments](current_deployments.md) - where the applications above are currently deployed.
- [Index Structure](index_structure.md) - understanding how data populates the SOLR index is key to understanding how the components of the architecture are related.

## Very high level overview

There are four systems:
  - Two editing platforms (one for the classification and one for the text based content)
  - A public website for publication
    - The Plant List API currently feeds into part of a larger website run on the eMonocot system and CraftCMS (these are not documented here)
    - We are currently working on a new, lighter weight website that will replace eMonocot and the CraftCMS systems.
  - An instance Apache Airflow that orchestrates the publication and backup processes.

![High level data flow diagram for the website](portal_dataflow.png)

The editing platforms (Rhakhis for the classification and Fyllo for the text) are LAMP (Linux, Apache, MySQL, PHP) stack applications. The __public website__ and the __WFO Plant List API__ are PHP applications running against an instance of the Apache SOLR Index.

### Rhakhis - classification editor

The classification (nomenclature and taxonomy) has its own worflow process that generates a versioned instance of the data (known as the WFO Plant List) every six months, on each solstice. 

![High level data flow diagram of producing the Plant List](rhakhis_dataflow.png)

### Fyllo - content management

The content management platform handles faceting data and text descriptions bound to the name IDs used in the classification produced by Rhakhis.

![High level data flow diagram](fyllo_dataflow.png)

The data is curated in CSV files stored in GitHub. Fyllo stores the metadata about those files, imports them and performs the process of taxonomic expansion as the data is pushed to the public website. See [Index Structure](index_structure.md) for more details.

### Taxonomic expansion

The classification consists of a nested hierarchy of taxa. Each taxon has an accepted name and zero to many synonymous names. Data managed by Fyllo is tagged with name IDs __not__ taxon IDs because the taxa in the classification may vary between different versions of the published classification. The content in the website is displayed on the basis of taxa in the current classification. Taxonomic expansion is the process whereby name tagged data is bound to appropriate taxa according to the current classification. 

![The process of taxonomic expansion illustrated.](taxonomic_expansion.png)
 


