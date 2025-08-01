---
title: WFO Guidelines for Taxonomic Backbone Contributors
permalink: /taxonomic-contributor-guide/
---

### Versions

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


## Introduction

This document provides the technical specification for data contributions to the WFO Taxonomic Backbone for the World Flora Online (WFO). Please see the document “WFO General Guidelines for Data Contributors” (General Guidelines) for the meaning of terms here set in italics. An introduction to the WFO project is given on the WFO website [www.worldfloraonline.org](https://about.worldfloraonline.org).

The process for becoming authorized and registered as a WFO Data Provider is detailed in the General Guidelines. For the technical process for contributing a Flora or other non-Backbone data (Content data), please refer to the “WFO Guidelines for Content Contributors".

At the core of WFO is an updatable __Taxonomic Backbone__ of scientific names and their classification that contains all Effectively Published plant names (as defined in the International Code of Nomenclature for Algae, Fungi and Plants), and differentiates between accepted names and synonyms. Data in the Taxonomic Backbone is in the Public Domain, under a CC0 waiver, which will automatically be added upon ingestion of the data to the WFO Taxonomic Backbone.

As stated in the General Guideline document, the first version of the WFO Taxonomic Backbone based on The Plant List v1.1 was not perfect both with respect to data quality and coverage. Since 2022 we have been producing a 6-monthly release of the WFO Taxonomic Backbone for the [WFO Plant list](https://wfoplantlist.org/). These editorial windows, the updates recieved from IPNI and input from our growing network of experts has radically improved the nomenclatural and classificion data in the WFO, since the Plant List v1.1.

## Contributing to the Taxonomic Backbone

The taxonomic backbone is colaborative project involving contributions from hundreds of experts. Individual specialists work in groups called __Taxonomic Expert Networks (TENs)__. Each TEN is responsible for curating part of the classification, usually a family or an order. The TENs are coordinated by the __network manager__ and decisions about establisment of TENs are taken by the WFO Taxonomic Working Group. The working group assures that the TENs are representative of the expertise available and the geographic distribution of the taxon. Individual specialists can be members of multiple TENs if they have expertise in multiple groups.

TENs are asked to account for all the names effectively published according to the rules of the International Code of Nomenclature for algae, fungi and plants (ICNAFP) for their taxon. Therefore, misapplications (stated as auct. or auct. non), pro parte synonyms, and hybrid formulae (e.g. _Nepenthes northiana_ × _N. maxima_) are not included (but names of nothotaxa, i.e. named hybrids are), nor are any names designating cultivated forms (grex, cv., etc.), except where these play a role in a nomenclatural context (e.g. as basionyms). Orthographic variants are included where they are in use.

## Data flow

The top copy of the taxonomic backbone is maintained in an SQL database (MySQL 8.*). The database and associated applications are called __Rhakhis__ (from the Ancient Greek: ῥάχις [rhákhis] for backbone). TENs can interact with this database in two ways:

1. They can log into the Rhakhis web interface and edit the data for their own group directly. Authorization controls prevent editing data in groups curated by other TENs. These controls also allow TENs to deligate responsibility for subtaxa within their group. Editing data within the Rhakhis user interface is further documented in the [Rhakhis handbook](https://plant-list-docs.rbge.info/rhakhis/).
2. If a TEN curates its data in some other system or is migrating data to Rhakhis it can submit data files directly to the network manager who will carry out a bulk import. Merging hierarchical dataset is a complex task and needs to be managed on a case by case basis. The much of this guide is focussed on preparing data for this process.

In addition to TENs entering data there is a monthly [IPNI](https://ipni.org/) workflow (run by the network manager) that imports newly published and historic names found in the literature by the IPNI team. This workflow also brings in some nomenclatural corrections for existing names. A monthly email is sent to the TENs community and a csv listing the new names is provided to TENs via the TEN respitory on Github.

Every six months, on the June and December solstices, a snapshot of the data in Rhakhis is published to four locations:

1. A file is generated for import into an Apache SOLR index. This is used to power the public facing version of the [WFO Plant List](https://wfoplantlist.org/)
2. Multiple DarwinCore files are generated. They are imported into the main [WFO Portal](https://www.worldfloraonline.org/).
3. A [Catalogue of Life Data Package](https://github.com/CatalogueOfLife/coldp) file is prepared and imported into [GBIF ChecklistBank](https://www.checklistbank.org/dataset/2004/about). Checklist bank provides tools to download subsets of the data in multiple formats.
4. All the files above along with a MySQL data dump and some additional mapping files are submitted to the [Zenodo](https://zenodo.org/) (the long term scientific data repository for [CERN](https://home.cern/)) with the concept DOI:[10.5281/zenodo.7460141](https://doi.org/10.5281/zenodo.7460141). Each individual release is given its own DOI and stored by CERN in perpetuity.

## Resilience

Software systems are ephemeral but data can persist indefinitely if it is passed from one system to another. The software behind Rhakhis is opensource and modular but of its time. We plan for all of the code behind the system to be replaced at some point in the future either in a piecemeal fashion or in one big step. This is inevitable as technologies and the people involved change. The data is openly licensed and can be passed from one system to another. Distributing multiple copies on a scheduled basis ensures that even in the event of catastrophic failure, whether technical or social, someone else can pick up our work and take it forward. Contributors are encouraged to keep their own copies of data releases if that provides peace of mind.

The open licensing and publishing model we use means anyone could [fork](https://en.wikipedia.org/wiki/Fork_(software_development)) the data and/or the software at any time. The data is therefore not bound to any one institution or set of individuals but is managed by community consensus.

## Accreditation and privacy

Contributions to the data are acknowledged at two levels.

1. The TENs are listed on all publications. Individual memembers of TENs who have not logged into Rhakhis are not acknowledged separately.
2. Individual researchers are acknowledged through their [ORCID](https://orcid.org/). In order to comply with GDPR (and other privacy standards) Rhakhis only stores the publicly available data from ORCID. Experts must authenticate with ORCID to add this data to the backbone dataset, even if they submit data in bulk via the network manager. Individuals who have been given editing rights to taxa within Rhakhis are acknowledged when the data is published. Connection of an ORCID to a publication DOI is normally sufficient for academic reporting and may even trigger automatic processes via [DataCite](https://datacite.org/). 

## Process



### Approval

TENS must be approved by the WFO Council prior to being given access and authority to curate the taxonomic backbone. If you wish to form a TEN or join an exisiting TEN please contact the [Taxonomic Working Group](mailto:taxwg@worldfloraonline.org).

* FIXME: Bullet list here of a few criteria TENs must fulfill.

### Decision on way of working

The TEN must decide how they will contribute data. This decision can be made as part of the approval process but can be changed later. There are four ways of working:

1. Edit data directly in the Rhakhis web interface. TENs manager can authorise facilitators within the TEN to start editing their taxon immediately after they have been approved by the council.
2. Submit a seed data file and then work in the Rhakhis web interface. Ingest of the data file will follow the process outlined below. Once this file is ingested the TEN can proceed with managing the data directly in the Rhakhis interface. The file will not be ingested before approval. The ingest cannot be repeated without overwriting any changes made using by the users through the interface. 
3. Submit periodic batch updates to Rhakhis. The TEN periodically provides files formatted as outlined below to the network manager. The TEN does __not__ make changes through the web interface as they will overwritten by the next batch update. The TEN is encouraged to register editors within the Rhakhis interface though. This will enable them to check that the imports are working correctly and also for individual experts to gain credit for their work via their ORCID. Imports will not start prior to approval.
4. Integration via GraphQL API calls. Rhakhis was designed so that the actions carried out in the web interface could be carried out via GraphQL API calls from trusted curatorial systems. In practice it has been found easier to do batch updates. API integration remains a possibility however.

It is possible to switch between these ways of working if necessary. A TEN could stop submitting batch updates and start editing in Rhakhis alone. A TEN that is only editing in Rhakhis could take the data to seed another system and then switch to working in batch mode or even use the API.

Smaller TENS with less technical support will tend to choose options 1 & 2. Those with more technical capabilities might choose 3 or 4. Some TENs are discussing working directly in Rhakhis (1 & 2) and then pulling taxonomic data into their owns systems, effectively avoiding having to implement and maintain their own taxonomy tables.

### Data ingest

There are three broad stages to data ingest. 

1. __Binding names to WFO IDs.__ Each row in a data file must contain the WFO ID (e.g. wfo-0000540576) for the name represented by row. IDs are usually added to a file that doesn't have them using a name matching service. This process can be carried out by the TEN prior to submission of a file. WFO provide a name [matching tool here](https://list.worldfloraonline.org/matching.php). Name matching almost always requires some manual interventions to resolve ambiguities. TENs who are submitting periodic batch updates should therefore store the WFO ID for a name once they have discovered it and __not rely on repeatedly name matching the same dataset__. If a name does not exist in Rhakhis it can be created, and a WFO ID generated, by someone with editing rights. Once each row in the datafile as a WFO ID it can be submitted to the network manager for ingest. They will carry out subsequent steps, probably with some iteration to clarify issues.
2. __Synchronisation of Nomenclatural fields.__ Once the row in the data file is bound to the name record in Rhakhis there is a one to one relationship between many of the nomenclatural data fields (for example the author string or the micro citation fields) in the file and in Rhakhis. The network manager can decide whether the data in the file adds to or overwrites the data in Rhakhis for each fields. There are some fields that have controlled vocubularies in Rhakhis and some that are context dependent, especially regarding accepted names of taxa. These may cause errors and are detailed below.
3. __Synchronisation of Taxonomic hierarchy.__ Once the nomenclatural fields have been synchronised then the classification in Rhakhis can be updated to match the classification. This is a complex process that makes waves of changes to Rhakhis until the two classifications are in agreement.

### Impact assessments

It is very important that the data integrity within Rhakhis is maintained at all times. This is how we are able to release data on a timed schedule rather than waiting until the data is in a particular state. We try to avoid importing errors to be cleaned up later. We have enough errors of our own! The data manager therefore runs an impact assessment before importing a data file. This impact assessment is a CSV file that may be shared with the TEN before the import is actually run. It is a way of catching unintended consequences that might not be obvious, especially when dealing with large datasets.

-- Got to there --


**STEP 2:** 

When not working in Rhakhis, TENs should upload a list to our name matching services. Details of these can be found at the [WFO Plant list API ]([WFO Plant List API](https://list.worldfloraonline.org/)).


Upon receipt at the WFO name matching service, the input file will be checked for the correct file extension (txt, csv, or xlsx) and the presence of the correct fields in the header row.
A Name Matching Response File will be returned using the file format of the submitted Name Matching File, either Excel or text. The returned file will provide the WFO-IDs needed to fill the obligatory “taxonID” field in the Darwin Core Archive Classification table. The Comments field is used to return the results of field matching and point out possible inconsistencies in your data. In Excel based response files, additional tabs are sometimes used to list particular name issues.

For names that did not match (this is common), the Data Provider should review the response file and make adjustments as necessary. Commonly, the response file may be modified and resubmitted to the WFO Gatekeeper in an iterative fashion. Unmatched names that are new names to the WFO Taxonomic Backbone discovered during this process will be assigned new WFO-IDs and added to the WFO Taxonomic Backbone with a preliminary taxonomicStatus of “Unchecked”, if their position in the classification (e.g. to which family they belong) can be clarified. This is to avoid delays in the addition of content data to the backbone.
After the completion of Step 2, all names provided should have a WFO-ID assigned, but often many names present in the initial taxonomic backbone are not matched and need further resolution.

**STEP 3** - Data upload into the Backbone

Taxonomic Backbone Data Providers (TENs) that send in their DwCA files should use the following tables and data elements (see "Creating a Darwin Core Archive File" in the General Guidelines for how to do this). Other file formats maybe acceptable after discussions with the WFO Gatekeeper. Replacing the backbone segment with the newly uploaded and verified dataset will be effected by the WFO Gatekeeper, who may have additional questions arising from the ingestion process.


### Data structure

FIXME - GOT TO HERE

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



~~All data submitted for the WFO Taxonomic Backbone must be in the form of a Darwin Core Archive (DwCA) and comply with WFO data formatting and controlled vocabularies provided below. This document provides instructions and information to assist in the preparation of the required DwCA file for the taxonomic backbone.
After authorization and registration with the WFO Gatekeeper, as described in the General Guidelines, a TEN (as Taxonomic Data Provider) can either work with the data they already hold or ask the WFO Gatekeeper to provide an extract of the current WFO Taxonomic Backbone data, to be used as a starting point to import into their database system. In the latter case, the name data will come from the WFO Taxonomic Backbone with a unique WFO Identifier (WFO-ID). Alternatively, the Data Provider may submit a file containing just a list of names which will be matched to the WFO Taxonomic Backbone and WFO-IDs assigned to the names. A Name Matching Response File will be returned containing all the submitted names along with WFO-ID for names that matched, and a Comments field describing the match or non-match results and any data issues. New names submitted by a TEN will be assigned new WFO-IDs.~~



