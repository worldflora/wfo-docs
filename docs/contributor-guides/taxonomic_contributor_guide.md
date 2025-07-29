---
permalink: /taxonomic-contributor-guide/
---

# World Flora Online

## Guidelines for Taxonomic Backbone Contributors

- Version 2.01 November 26, 2017.
- Updated by Mark Watson Feb 2018.
- Updated by William Ulate Apr 2018.
- Version 2.02 – Updated by Technical Working Group June 2018.
- Version 2.03 – Updated by WFO Council and Chuck Miller June 2018.
- Version 2.04 – Updated by Walter Berendsohn July 4, 2018 and November 18, 2018.
- Version 2.05 – Updated by Walter Berendsohn and the Technical Working Group April 24, 2019.
- Version 2.06 – Approved by WFO Council April 25, 2019 in Istanbul.
- Version x - This draft. 2025.

**Version history:** Based on the first part of the “Guidelines for Backbone Data Contributors” v. 1.0. distributed by W. Berendsohn March 31, 2017. Changes were discussed by the WFO’s Taxonomic Working Group in their meeting in Paris and documented by Marc Sosef. The general part of the original document was separated as the “General Guidelines for Data Contributors” v. 2.x.

NB: The following documents relate to Data Contributions: 1. WFO General Guidelines for Data Contributors 2. WFO Guidelines for Taxonomic Backbone Contributors (this document) 3. WFO Guidelines for Content Contributors

**Table of Contents**

[1. ](#Introduction)

[2. ](#Contributing-to-the-Taxonomic-Backbone)

[3. ](#WFO-Taxonomic-Backbone-data-ingestion-process)


### 1. Introduction

This document provides the technical specification for data contributions to the WFO Taxonomic Backbone for the World Flora Online (WFO). Please see the document “WFO General Guidelines for Data Contributors” (General Guidelines) for the meaning of terms here set in italics. An introduction to the WFO project is given on the WFO website [www.worldfloraonline.org](https://about.worldfloraonline.org).

The process for becoming authorized and registered as a WFO Data Provider is detailed in the General Guidelines. For the technical process for contributing a Flora 
or other non-Backbone data (Content data), please refer to the “WFO Guidelines for Content Contributors".

### Taxonomic Backbone

At the core of WFO is an updatable Taxonomic Backbone of scientific names and their classification that contains all Effectively Published plant names (as defined in the International Code of Nomenclature for Algae, Fungi and Plants), and differentiates between accepted names and synonyms. Data in the Taxonomic Backbone is in the Public Domain, under a CC0 waiver, which will automatically be added upon ingestion of the data to the WFO Taxonomic Backbone.

As stated in the General Guideline document, the first version of the WFO Taxonomic Backbone based on The Plant List v1.1 is not perfect both with respect to data quality and coverage. It is expected that contributions coming from taxonomists organised in Taxonomic Expert Networks will rapidly improve the situation and that actively curated data within the WFO Taxonomic Backbone will become authoritative over time. The guidelines for the establishment and governance of Taxonomic Expert Networks (TENs) are provided in the General Guidelines.

### **2. Contributing to the Taxonomic Backbone**

TENs covering an entire taxonomic group (typically a family) should strive to include all names in their group. Only names Effectively Published according to the rules of the International Code of Nomenclature for algae, fungi and plants (ICNAFP) are included in the WFO Taxonomic Backbone. Therefore, misapplications (stated as auct. or auct. non), pro parte synonyms, and hybrid formulae (e.g. _Nepenthes northiana_ × _N. maxima_) are not included (but names of nothotaxa, i.e. named hybrids are), nor are any names designating cultivated forms (grex, cv., etc.), except where these play a role in a nomenclatural context (e.g. as basionyms). Orthographic variants are included. The TENs are asked to resolve all names stemming from the first version of the WFO Taxonomic Backbone, with the possibility to exclude names from the backbone used for the WFO Portal.

Every scientific name submitted to the WFO should include
• the name of the author,
• the abbreviated citation of the original publication, volume number (if numbered), the page number on which the description begins, and the year in which the name was published.
• If additional data are available (e.g. a full literature citation for the original publication of that name), then this can be stored within the WFO system if provided in the form set out below.
• Nomenclatural citations should follow standard abbreviations for journals from Botanico Periodicum Huntianum (BPH; http://fmhibd.library.cmu.edu/fmi/iwp/cgi?-db=BPH_2015&-loadframes) or other published works from Taxonomic Literature II (TL2; http://www.sil.si.edu/DigitalCollections/tl-2/index.cfm). For references for which the year of publication is not evident or is questionable, please consult TL2.

Full details for data requirements for WFO are provided below in Tables and Data Elements used in the WFO Taxonomic Backbone.

### **Getting Started with WFO Data**

TENS can curate the WFO backbone in Rhakhis - the WFO curatation tool.

Rhakhis handbook can be found here - [Rhakhis handbook](https://plant-list-docs.rbge.info/rhakhis/)
Sandbox can be found here - [Rhakhis sandbox](https://rhakhis.rbge.info/rhakhis/ui/)

All data submitted for the WFO Taxonomic Backbone must be in the form of a Darwin Core Archive (DwCA) and comply with WFO data formatting and controlled vocabularies provided below. This document provides instructions and information to assist in the preparation of the required DwCA file for the taxonomic backbone.
After authorization and registration with the WFO Gatekeeper, as described in the General Guidelines, a TEN (as Taxonomic Data Provider) can either work with the data they already hold or ask the WFO Gatekeeper to provide an extract of the current WFO Taxonomic Backbone data, to be used as a starting point to import into their database system. In the latter case, the name data will come from the WFO Taxonomic Backbone with a unique WFO Identifier (WFO-ID). Alternatively, the Data Provider may submit a file containing just a list of names which will be matched to the WFO Taxonomic Backbone and WFO-IDs assigned to the names. A Name Matching Response File will be returned containing all the submitted names along with WFO-ID for names that matched, and a Comments field describing the match or non-match results and any data issues. New names submitted by a TEN will be assigned new WFO-IDs.

Alternatively (in the future), a TEN may choose to use the BOTALISTA online system to manage and curate their data. In which case a new project can be set up within BOTALISTA with a copy of the WFO backbone data related to their expert group. Those who wish to use the BOTALISTA system should contact the WFO Gatekeeper.
A TEN must commit to working with the WFO Gatekeeper to correct errors and missing data in their submitted dataset so that the dataset can replace the earlier version in the WFO Taxonomic Backbone. The WFO Gatekeeper will also consult the TEN in the case of new or unrecognised names that are provided by Content data providers (i.e. names used as accepted names e.g. in Floras or monographs).

### **3. WFO Taxonomic Backbone data ingestion process**

STEP 1: Authorization and Registration of Contributors
Before submitting data to the WFO, a Data Provider must be authorized and registered. The process for authorization and registration is provided in the General Guidelines.

STEP 2: Name identification

When not working in the BOTALISTA environment, taxonomic backbone Data Providers (TENs) should upload a preliminary list of their names using the Name Matching Input File format shown below to the pre-check service offered under http://www.worldfloraonline.org/contribute.
The Name Matching Input File can be either an Excel file (XSLX) or a text file with comma, tab or pipe delimited separation. The first row of the Excel or text file must contain the Field names listed in the table below.

Upon receipt at the WFO name matching service, the input file will be checked for the correct file extension (txt, csv, or xlsx) and the presence of the correct fields in the header row.
A Name Matching Response File will be returned using the file format of the submitted Name Matching File, either Excel or text. The returned file will provide the WFO-IDs needed to fill the obligatory “taxonID” field in the Darwin Core Archive Classification table. The Comments field is used to return the results of field matching and point out possible inconsistencies in your data. In Excel based response files, additional tabs are sometimes used to list particular name issues.

For names that did not match (this is common), the Data Provider should review the response file and make adjustments as necessary. Commonly, the response file may be modified and resubmitted to the WFO Gatekeeper in an iterative fashion. Unmatched names that are new names to the WFO Taxonomic Backbone discovered during this process will be assigned new WFO-IDs and added to the WFO Taxonomic Backbone with a preliminary taxonomicStatus of “Unchecked”, if their position in the classification (e.g. to which family they belong) can be clarified. This is to avoid delays in the addition of content data to the backbone.
After the completion of Step 2, all names provided should have a WFO-ID assigned, but often many names present in the initial taxonomic backbone are not matched and need further resolution.

STEP 3 - Data upload into the Backbone

Taxonomic Backbone Data Providers (TENs) that send in their DwCA files should use the following tables and data elements (see "Creating a Darwin Core Archive File" in the General Guidelines for how to do this). Other file formats maybe acceptable after discussions with the WFO Gatekeeper. Replacing the backbone segment with the newly uploaded and verified dataset will be effected by the WFO Gatekeeper, who may have additional questions arising from the ingestion process.
