---
title: World Flora Online
permalink: /taxonomic-contributor-guide/
---

## Guidelines for Taxonomic Backbone Contributors

- Version 2.01 November 26, 2017.
- Updated by Mark Watson Feb 2018.
- Updated by William Ulate Apr 2018.
- Version 2.02 – Updated by Technical Working Group June 2018.
- Version 2.03 – Updated by WFO Council and Chuck Miller June 2018.
- Version 2.04 – Updated by Walter Berendsohn July 4, 2018 and November 18, 2018.
- Version 2.05 – Updated by Walter Berendsohn and the Technical Working Group April 24, 2019.
- Version 2.06 – Approved by WFO Council April 25, 2019 in Istanbul. [Available as a pdf](https://about.worldfloraonline.org/images/uploads/documents/WFOGuidelinesForTaxonomicBackboneContributorsV._2.06.pdf)
- Version x - This draft. 2025.

**Version history:** Based on the first part of the “Guidelines for Backbone Data Contributors” v. 1.0. distributed by W. Berendsohn March 31, 2017. Changes were discussed by the WFO’s Taxonomic Working Group in their meeting in Paris and documented by Marc Sosef. The general part of the original document was separated as the “General Guidelines for Data Contributors” v. 2.x.

NB: The following documents relate to Data Contributions: 
1. [WFO General Guidelines for Data Contributors](https://about.worldfloraonline.org/images/uploads/documents/WFOGeneralGuidelinesForDataContributorsV2.07.pdf)
2. WFO Guidelines for Taxonomic Backbone Contributors (this document) 
3. [WFO Guidelines for Content Contributors](https://about.worldfloraonline.org/images/uploads/documents/WFOGuidelinesforContentDataContributorsV._2.04.pdf)

**Table of Contents**

[1. Introduction](#1-introduction)

[2. Contributing](#2-contributing-to-the-taxonomic-backbone)

[3. Ingestion](#3-wfo-taxonomic-backbone-data-ingestion-process)


### Introduction

This document provides the technical specification for data contributions to the WFO Taxonomic Backbone for the World Flora Online (WFO). Please see the document “WFO General Guidelines for Data Contributors” (General Guidelines) for the meaning of terms here set in italics. An introduction to the WFO project is given on the WFO website [www.worldfloraonline.org](https://about.worldfloraonline.org).

The process for becoming authorized and registered as a WFO Data Provider is detailed in the General Guidelines. For the technical process for contributing a Flora or other non-Backbone data (Content data), please refer to the “WFO Guidelines for Content Contributors".

At the core of WFO is an updatable __Taxonomic Backbone__ of scientific names and their classification that contains all Effectively Published plant names (as defined in the International Code of Nomenclature for Algae, Fungi and Plants), and differentiates between accepted names and synonyms. Data in the Taxonomic Backbone is in the Public Domain, under a CC0 waiver, which will automatically be added upon ingestion of the data to the WFO Taxonomic Backbone.

As stated in the General Guideline document, the first version of the WFO Taxonomic Backbone based on The Plant List v1.1 was not perfect both with respect to data quality and coverage. Since 2022 we have been producing a 6-monthly release of the WFO Taxonomic Backbone for the [WFO Plant list](https://wfoplantlist.org/). These editorial windows, the updates recieved from IPNI and input from our growing network of experts has radically improved the nomenclatural and classificion data in the WFO, since the Plant List v1.1.

### Contributing to the Taxonomic Backbone

The taxonomic backbone is colaborative project involving contributions from hundreds of experts. Individual specialists work in groups called __Taxonomic Expert Networks (TENs)__. Each TEN is responsible for curating part of the classification, usually a family or an order. The TENs are coordinated by the __network manager__ and decisions about establisment of TENs are taken by the WFO Taxonomic Working Group. The working group assures that the TENs are representative of the expertise available and the geographic distribution of the taxon. Individual specialists can be members of multiple TENs if they have expertise in multiple groups.

TENs are asked to account for all the names effectively published according to the rules of the International Code of Nomenclature for algae, fungi and plants (ICNAFP) for their taxon. Therefore, misapplications (stated as auct. or auct. non), pro parte synonyms, and hybrid formulae (e.g. _Nepenthes northiana_ × _N. maxima_) are not included (but names of nothotaxa, i.e. named hybrids are), nor are any names designating cultivated forms (grex, cv., etc.), except where these play a role in a nomenclatural context (e.g. as basionyms). Orthographic variants are included where they are in use.

### Data management

The top copy of the taxonomic backbone is maintained in an SQL database (MySQL 8.*). The database and associated applications are called Rhakhis (from the Ancient Greek: ῥάχις [rhákhis] for backbone). TENs can interact with this database in two ways:

1. They can log into the Rhakhis web interface and edit the data for their own group directly. Authorization controls prevent editing data in groups curated by other TENs. These controls also allow TENs to deligate responsibility for subtaxa within their group. Editing data within the Rhakhis user interface is further documented in the [Rhakhis handbook](https://plant-list-docs.rbge.info/rhakhis/).
2. If the TEN curates their data in some other system or are migrating data to Rhakhis they can submit data files directly to the TENs network manager who will carry out a bulk import. Merging hierarchical dataset is a complex task and needs to be managed on a case by case basis. The rest of this guide is a starting point for preparing data for this process.

Every six months, on the June and December solstices, a snapshot of the data in Rhakhis is taken and published to four locations:

1. A file is generated for import into an Apache SOLR index. This is used to power the public facing version of the [WFO Plant List](https://wfoplantlist.org/)
2. Multiple DarwinCore files are generated and they are imported into the main [WFO Portal](https://www.worldfloraonline.org/).
3. A [Catalogue of Life Data Package](https://github.com/CatalogueOfLife/coldp) file is prepared and imported into [GBIF ChecklistBank](https://www.checklistbank.org/dataset/2004/about).
4. All the files above along with a MySQL data dump and some additional mapping files are submitted to the [Zenodo](https://zenodo.org/) (the long term scientific data repository for [CERN](https://home.cern/)) with the concept DOI:[10.5281/zenodo.7460141](https://doi.org/10.5281/zenodo.7460141). Each individual release is given its own DOI and stored by CERN in perpetuity.

### Resilience

Software systems are ephemeral but data can persist indefinitely if it is passed from one system to another. The software behind Rhakhis is opensource and modular but of its time. We plan for all of the code behind the system to be replaced at some point in the future either in a piecemeal fashion or in one big step. This is inevitable as technologies and the people involved change. The data is openly licensed and can be passed from one system to another. Distributing multiple copies on a scheduled basis ensures that even in the event of catastrophic failure, whether technical or social, someone else can pick up our work and take it forward. Contributors are encouraged to keep their own copies of data releases if that would provide peace of mind.

The open licensing and publishing model we use means anyone could [fork](https://en.wikipedia.org/wiki/Fork_(software_development)) the data and/or the software at any time. The data is therefore not technically bound to any one institution of set of individuals.

### Accreditation





### Data structure


Every scientific name submitted to the WFO should include
- the name of the author(s)
- the abbreviated citation of the original publication, volume number (if numbered), the page number on which the description begins, and the year in which the name was published.
- If additional data are available (e.g. a full literature citation for the original publication of that name), then this can be stored within the WFO system if provided in the form set out below.
- Nomenclatural citations should follow standard abbreviations for journals from Botanico Periodicum Huntianum [BPH](http://fmhibd.library.cmu.edu/fmi/iwp/cgi?-db=BPH_2015&-loadframes) or other published works from Taxonomic Literature II [TL2](http://www.sil.si.edu/DigitalCollections/tl-2/index.cfm). For references for which the year of publication is not evident or is questionable, please consult TL2.

For vascular plants WFO nomenclatural data is linked to IPNI records. We encourage TENs to inform IPNI of errors and pass on corrections. We share corrections to nomencalutral data via the monthly IPNI work flow, and TENs can send corrections to IPNI with the help of a pre-populated email via the Rhakhis interface.

Full details for data requirements for WFO are provided below in Tables and Data Elements used in the WFO Taxonomic Backbone.

### Getting Started with WFO Data

TENS can curate names and classification in [Rhakhis](https://list.worldfloraonline.org/rhakhis/ui/index.html#), the WFO's curatation tool. Authorised TENs can be given access to Rhakhis, limited to their group, usually the Family etc. 

- Rhakhis handbook can be found here - [Rhakhis handbook](https://plant-list-docs.rbge.info/rhakhis/)
- Sandbox can be found here - [Rhakhis sandbox](https://rhakhis.rbge.info/rhakhis/ui/)

The WFO has a monthly IPNI workflows to bring in newly published and historic names that are found in the literature. This workflow also brings in nomenclatural corrections and edits provided by the IPNI team. New names are added to Rhakhis and a monthly email is send to notify the TEN community and csv with those new names is provided to TENs via the TEN respitory on Github.

~~All data submitted for the WFO Taxonomic Backbone must be in the form of a Darwin Core Archive (DwCA) and comply with WFO data formatting and controlled vocabularies provided below. This document provides instructions and information to assist in the preparation of the required DwCA file for the taxonomic backbone.
After authorization and registration with the WFO Gatekeeper, as described in the General Guidelines, a TEN (as Taxonomic Data Provider) can either work with the data they already hold or ask the WFO Gatekeeper to provide an extract of the current WFO Taxonomic Backbone data, to be used as a starting point to import into their database system. In the latter case, the name data will come from the WFO Taxonomic Backbone with a unique WFO Identifier (WFO-ID). Alternatively, the Data Provider may submit a file containing just a list of names which will be matched to the WFO Taxonomic Backbone and WFO-IDs assigned to the names. A Name Matching Response File will be returned containing all the submitted names along with WFO-ID for names that matched, and a Comments field describing the match or non-match results and any data issues. New names submitted by a TEN will be assigned new WFO-IDs.~~

~~Alternatively (in the future), a TEN may choose to use the BOTALISTA online system to manage and curate their data. In which case a new project can be set up within BOTALISTA with a copy of the WFO backbone data related to their expert group. Those who wish to use the BOTALISTA system should contact the WFO Gatekeeper.
A TEN must commit to working with the WFO Gatekeeper to correct errors and missing data in their submitted dataset so that the dataset can replace the earlier version in the WFO Taxonomic Backbone. The WFO Gatekeeper will also consult the TEN in the case of new or unrecognised names that are provided by Content data providers (i.e. names used as accepted names e.g. in Floras or monographs).~~

### 3. WFO Taxonomic Backbone data ingestion process

**STEP 1:** Approval

TENS must be approved by the WFO Council prior to being given access and authority to curate the taxonomic backbone. If you wish to form a TEN or join an exisiting TEN please contact the [Taxonomic Working Group](mailto:taxwg@worldfloraonline.org).

~~Before submitting data to the WFO, a Data Provider must be authorized and registered. The process for authorization and registration is provided in the General Guidelines.~~

**STEP 2:** Name identification

When not working in Rhakhis, TENs should upload a list to our name matching services. Details of these can be found at the [WFO Plant list API ]([WFO Plant List API](https://list.worldfloraonline.org/)).

~~When not working in the BOTALISTA environment, taxonomic backbone Data Providers (TENs) should upload a preliminary list of their names using the Name Matching Input File format shown below to the pre-check service offered under http://www.worldfloraonline.org/contribute.
The Name Matching Input File can be either an Excel file (XSLX) or a text file with comma, tab or pipe delimited separation. The first row of the Excel or text file must contain the Field names listed in the table below.~~

Upon receipt at the WFO name matching service, the input file will be checked for the correct file extension (txt, csv, or xlsx) and the presence of the correct fields in the header row.
A Name Matching Response File will be returned using the file format of the submitted Name Matching File, either Excel or text. The returned file will provide the WFO-IDs needed to fill the obligatory “taxonID” field in the Darwin Core Archive Classification table. The Comments field is used to return the results of field matching and point out possible inconsistencies in your data. In Excel based response files, additional tabs are sometimes used to list particular name issues.

For names that did not match (this is common), the Data Provider should review the response file and make adjustments as necessary. Commonly, the response file may be modified and resubmitted to the WFO Gatekeeper in an iterative fashion. Unmatched names that are new names to the WFO Taxonomic Backbone discovered during this process will be assigned new WFO-IDs and added to the WFO Taxonomic Backbone with a preliminary taxonomicStatus of “Unchecked”, if their position in the classification (e.g. to which family they belong) can be clarified. This is to avoid delays in the addition of content data to the backbone.
After the completion of Step 2, all names provided should have a WFO-ID assigned, but often many names present in the initial taxonomic backbone are not matched and need further resolution.

**STEP 3** - Data upload into the Backbone

Taxonomic Backbone Data Providers (TENs) that send in their DwCA files should use the following tables and data elements (see "Creating a Darwin Core Archive File" in the General Guidelines for how to do this). Other file formats maybe acceptable after discussions with the WFO Gatekeeper. Replacing the backbone segment with the newly uploaded and verified dataset will be effected by the WFO Gatekeeper, who may have additional questions arising from the ingestion process.
