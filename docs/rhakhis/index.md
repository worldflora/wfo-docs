---
title: Rhakhis Handbook
---

Guide to using Rhakhis, the World Flora Online taxonomic backbone curation tool.

## Related Documentation

The Rhakhis documentation consists of three complementary resources:

- **Rhakhis Handbook** – explains how to use the Rhakhis user interface.
- [**Concepts Model**]((https://plant-list-docs.rbge.info/concepts.html) – explains the nomenclatural and taxonomic concepts that underpin Rhakhis.
- [**Suggested Curatorial Workflows**](https://github.com/worldflora/wfo-tens/wiki/WFO-Suggested-Curatorial-workflows) – recommended procedures for common curation tasks.

New users are encouraged to consult all three resources.

## Quick Start

For first-time users:

1. Sign in using your ORCID iD.
2. Contact your TEN focal or Alan Elliott to be given curatorial rights.
3. Search for a name using the A–Z or Matching tab.
4. Open the relevant name record.
5. Review nomenclatural details and assign the correct rank.
6. Add or update authorship and protologue information.
7. Place the name as either an accepted taxon or a synonym.
8. Add supporting references.
9. Save your changes.

For detailed procedures, see the Suggested Curatorial Workflows documentation.

## Glossary

### Accepted taxon

A name currently accepted within the World Flora Online classification.

### Synonym

A name linked to an accepted taxon within the classification.

### Unplaced name

A nomenclatural record that has not yet been assigned a position in the classification.

### Deprecated record

A record excluded from normal use but retained for historical and data management purposes.

### Basionym

The original name upon which a later name is based.

### Nomenclatural status

The nomenclatural standing of a name (for example valid, illegitimate, invalid or conserved).

### Taxonomic placement

The position of a name within the accepted classification.

### Curator

A user with editing permissions for a specified section of the backbone.

### Homotypic name

A name based on the same type specimen as another name.

### Protologue

The original publication in which a name was established.

## Understanding Rhakhis

> Key Concept
>
> Rhakhis separates nomenclatural information from taxonomic opinion.
>
> Names can exist as nomenclatural records without being placed in the
> classification. Taxonomic placement determines whether a name is an
> accepted taxon, a synonym or remains unplaced.
>
> Understanding this distinction will make most of Rhakhis' behaviour
> intuitive.

## Contents

1. [Getting Started](#getting-started)
2. [Navigation Tabs](#navigation-tabs)
   - [A–Z](#a-z)
   - [Matching](#matching)
   - [Browse](#browse)
   - [Add Name](#add-name)
   - [Stats](#stats)
   - [Users](#users)
   - [Activity](#activity)
   - [Data](#data)
3. [Name Records](#name-records)
4. [Editing Records](#editing-records)
5. [Placement of Names](#placement-of-names)
6. [References](#references)
7. [Curators](#curators)

# Getting Started

**Introduction Video**

<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/845234343?h=e5a851207f&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Rhakhis introduction."></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>

First sign-in with your [ORCID iD](https://orcid.org/).

The navigation tabs will become live and you can start using the system.

The main navigation tabs are:

- **A–Z** – search for names using an exact-match style lookup.
- **Matching** – search using partial strings and approximate matches.
- **Browse** – navigate through the taxonomic hierarchy.
- **Add Name** – create new nomenclatural records.
- **Stats** – view summary statistics for the backbone.
- **Users** – view users and curator assignments.
- **Activity** – review recent editing activity.
- **Data** – download data exports.


As a first time user you can view and download data but you cannot edit anything. If you are part of a Taxonomic Expert Network (TEN) please contact your TEN focal who can assign you to your group. If you are a new TEN email Alan Elliott to be assigned to your group.

[back to top](#rhakhis-users-handbook)

# Navigation Tabs

### A-Z

Begin by typing the name you are looking for. Rhakhis begins suggesting names as soon as the first character is entered. Continue typing until the required record appears in the results list.

  
This search returns names that begin with the text entered. For example if you type _Poa annua_ it will return the records that begin with _Poa annua._ If you misspell the name _Poa annum_ it will return no results. If you are unsure of a spelling, use the Matching tab, which returns similar results in addition to exact matches.

  

If you are searching for an infraspecific name do not insert the rank as it will return no results. Search only the name parts, for example "_Poa annua supina"._ This will return results for both the variety and subspecies records of this name.

For an explanation of record colours see
[Name Record Overview](#name-record-overview).

![](https://t2197470.p.clickup-attachments.com/t2197470/bc855ede-0f01-45a5-b39c-b4d259756aab/image.png)
  
### Matching

The Matching search requires at least four characters before suggestions are returned. It will suggest more than just the exact string searched this is useful where you are unsure of the epithet ending.

  

Matching also works with ranks being part of the name. It will still suggest more than the exact hit.

  

_"Poa annua_ subsp. _supina"_ for example will return the subspecies record and the two variety records of this name.

### Browse

The Browse tab opens at the root record, named Code, which represents the _International Code of Nomenclature for algae, fungi and plants_.

  

From here you can navigate down through the hierarchy using the box to the Right called "Phyla". This contains the principal taxonomic groups curated within the WFO backbone: Angiosperms, Bryophytes, Gymnosperms and Pteridophytes.

  

![](https://t2197470.p.clickup-attachments.com/t2197470/6c5e557c-f014-4ea0-803d-abd9cfb72570/image.png)

  

Once you have navigated down through the ranks to the record you wish to look at you can use the breadcrumb trail to jump back through the hierarchy without having to start over.

  

![](https://t2197470.p.clickup-attachments.com/t2197470/16004e15-faba-4876-9313-bcbd4a102927/image.png)

### Add Name

To add a new name enter the name parts, with no ranks.

### Stats

The current family level statistics. These regenerate over time. Your edits will take a few days at most to show.

### Users

The Users tab lists registered users, links to their ORCID profiles and the taxonomic groups they are authorised to curate.

If you are part of a Taxonomic Expert Network you will be assigned as the curator of the taxon and this gives you rights to edit that taxon, any descendant taxa and any synonyms of those taxa.

Once you have been made the curator for your family you can edit everything it contains. You will also now have the ability to assign colleagues as curators to any point in the part of the backbone you are assigned.

> Why?
>
> Once a name is placed within the classification it becomes part of the
> consensus taxonomy maintained by the responsible TEN. Edit permissions
> help prevent accidental changes outside a curator's area of expertise.

Unplaced names are not controlled by this authorization mechanism. An unplaced name can be edited by any user who is an editor of any taxon, but once that name is placed within the taxonomic hierarchy it is controlled by the editors of the associated taxa and becomes "locked" into the consensus taxonomy.

> Why?
>
> Unplaced names are treated as nomenclatural records rather than part
> of the consensus classification. This allows specialists to improve
> nomenclatural information before taxonomic placement is decided.

### Activity

This tab shows the most recent edits made to records by users. We plan to implement a filter by family.

### Data

The data download tab allows users to export data in a number of formats.

If you think of others please, contact Roger Hyam.


# Name Records

### Name Record Overview 

#### Record Colours

| Colour | Meaning |
|---------|---------|
| Red | Deprecated record |
| Yellow | Placed record (accepted taxon or synonym) |
| Grey | Unplaced nomenclatural record |


![](https://t2197470.p.clickup-attachments.com/t2197470/bc855ede-0f01-45a5-b39c-b4d259756aab/image.png)


### Adding a new name

> Why?
>
> Homonyms are legitimate parts of botanical nomenclature. Rhakhis
> therefore permits their creation but requires explicit acknowledgement
> to reduce accidental duplication.

<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/847250597?h=15009c38d6&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="New Recording - 21/07/2023, 08:59:52"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>

Please see below for details about how to create specific ranks.

![](https://t2197470.p.clickup-attachments.com/t2197470/387adbb3-404d-4e8b-98ea-cc4be8336bb9/image.png)

For a **Genus** only a one name part if required. For example: *Poa* or *Rhododendron*.

For Infrageneric names two parts are required. The **Genus** and the **Infrageneric epithet**. For example: *Rhododendron* and *Vireya*.

For a **species** name two parts are required. The **Genus** and the **epithet**. For example: _Poa annua, Rhododendron ponticum_.

For an **infraspecific name** the **Genus**, the **species** **epithet** and **infraspecific epithet** are required. For example: _Poa annua annua, Rhododendron ponticum ponticum_.

For **supra-generic ranks** (subfamily, tribe, supertribe and related ranks) these only require a one part name. For example: *Ericoideae*, *Phyllodoceae*, *Rhodoreae*.


> ⚠️ You select the rank in the name record once it has been created.

Rhakhis will check if the name exists before allowing you to continue. If the name does not exist the Create button will become active and you can create the record.
 
![](https://t2197470.p.clickup-attachments.com/t2197470/a4aade91-4077-4a29-8c97-1a659e09022f/image.png)

Rhakhis will also suggest name records that exist that might be the same thing.

If the name parts exactly match an existing record, you must acknowledge that you are about to create an additional homonym before the Create button becomes active.


![](https://t2197470.p.clickup-attachments.com/t2197470/be3905c7-8421-4e4b-acc8-ee2c6e20ae72/image.png)

It is now time to start editing.  

![](https://t2197470.p.clickup-attachments.com/t2197470/7c6fc355-d1f1-4222-8d69-3ad6184bf631/image.png)


# Editing Records

As a curator you can edit any unplaced record and any records that are within the group you are assigned to curate. Sometimes you may find a name that has been placed as a synonym in a family outside what you are able to curate. Please contact Alan Elliot in this instance.

### Rank

Please select the appropriate rank from the drop down. Rhakhis will default to Genus for a one part name, species for a two part name and a subspecies for a three part name. 

![](https://t2197470.p.clickup-attachments.com/t2197470/f13b0b55-2a96-4371-bb4f-c666ad74bee1/image.png)
  

### Nomenclatural Status

> Why?
>
> Rhakhis separates nomenclatural validity from taxonomic placement.
> A name must have a nomenclatural status of **Valid** or **Conserved** before it can be
> placed as an accepted taxon in the classification.


The default nomenclatural Status is **Unknown**. Please select what is correct. If you are unsure leave it as unknown.
  
![](https://t2197470.p.clickup-attachments.com/t2197470/97d2b9ad-d3ae-4bec-9bcb-4a3e5bae63e4/image.png)

**conserved -** These names have been conserved for continued use to improved nomenclatural stability. See [https://naturalhistory2.si.edu/botany/codes-proposals/](https://naturalhistory2.si.edu/botany/codes-proposals/)

**deprecated -** It is unlikely you would use this when creating a new record. If you find a record you want to remove from the public release use this status. Please add a note to the record stating why it has been deprecated.

**illegitimate -** The only placement activity you can do with illegitimate is to make it a synonym.

**invalid -** a name not validly published. The only placement activity you can do with invalid is to make it a synonym.

**rejected -** Name rejected by the Nomenclature Committee of the ICBN. See the lists here

[https://naturalhistory2.si.edu/botany/codes-proposals/](https://naturalhistory2.si.edu/botany/codes-proposals/)

**sanctioned -** fungal name equivalent of conserved. Do not use for names in the WFO.

**superfluous -** The only placement activity you can do with unknown is make it a synonym.

**unknown -** default status. The only placement activity you can do with unknown is make it a synonym.

**valid** \- use this when you know a name meets the requirements set out in the Code. Only valid names can be placed in the classification as an accepted taxon.

> Why?
>
> Deprecated records are retained rather than deleted so that historical
> decisions remain traceable and external references to those records do
> not break.

### Author string
  
Should follow the Standard Form abbreviation.

> Why?
>
> Using IPNI standard abbreviations ensures author citations are
> consistent across the World Flora Online backbone and compatible with
> other nomenclatural resources.

Please refer to IPNI. [www.ipni.org](http://www.ipni.org/)

Using advanced search and the Author Tab.

**Examples**

>Wall. for Nathaniel Wallich
>
>B.Z.Duan for Bao Zhong Duan.

WFO is aiming for the **fullest authorship** for a name record so please include ex authors.  

>(Wall.) Hook.f. & Benth. ex Cleghorn
>
>Steud. ex (A.Rich).
>
>A.Cunn. ex Benth.

We are looking for no spaces between author's initials and last name.

>B.Z.Duan not B. Z. Duan

If you find errors in IPNI please feedback authorship corrections directly to IPNI editors.

> Why?
>
> Full authorship preserves the complete nomenclatural history of a name
> and allows users to distinguish names that may otherwise appear
> identical.


### Protologue information

Should follow the Standard Form abbreviation.

Please refer to IPNI. [www.ipni.org](http://www.ipni.org/)

Using advanced search and the Publications Tab.

> Why?
>
> The protologue represents the original published description of a name
> and is one of the most important pieces of nomenclatural evidence for
> later taxonomic work.
  

**Examples:**

>Edinburgh J. Bot. 51(2): 173 (1994).
>
>Kew Bull. 46(1): 171 (1991).
>
>Prodr. \[A. P. de Candolle\] 2: 467 (1825).
  
The publication's "micro" citation should generally follows what is found in IPNI.

If you find errors in IPNI please feed back publication corrections directly to IPNI editors.  

Please also add the Year.

![](https://t2197470.p.clickup-attachments.com/t2197470/75f2f464-090c-4430-9f2c-d46c033762b4/image.png)


## Placement of Names

<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/847260277?h=565f9d0f35&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Rhakhis - Placing names in the classification"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>

<br><br>

> ⚠️ Curator permissions apply to placed names.
>
> If a name is already placed within a section of the classification that
> you do not curate, please contact your TEN focal or Alan Elliott for
> assistance.

### Placing an Accepted Taxon
 
> Why?
>
> Rhakhis only allows placement beneath an appropriate accepted parent.
> This prevents names being assigned to invalid positions within the
> classification and helps maintain a consistent taxonomic hierarchy.

To place as an accepted taxon

1) Change the Nomenclatural status to Valid. The nomenclatural status of a name must be Valid to be an accepted taxon. 

![](https://t2197470.p.clickup-attachments.com/t2197470/8704f3ac-3942-4510-afa0-0141d84d6c35/image.png)

2). In the Placement box select _Raise to accepted taxon within._

Rhakhis will suggest the appropriate parent in this example, _Agapetes_ as it can only be an accepted species in this Genus.

![](https://t2197470.p.clickup-attachments.com/t2197470/818abc38-5ec0-4b67-a833-03bb8e02b9e8/image.png)

Rhakhis will not allow you to place names that do not align with an accepted parent record. For example _Lathyrus_ _sylvestris_ can only be an accepted taxon in _Lathyrus_, or an accepted infrageneric group within _Lathyrus_. The same is true for infraspecific names. For example _Lathyrus_ _latifolius_ subsp. _latifolius_ can only be placed as an accepted taxon within _Lathyrus latifolius_.

If Rhakhis does not suggest an appropriate parent record it is because the name is not present in the database or is not accepted in the classification.  

### Placing a Synonym

This is how to place a name record that has yet to be placed in the classification, the elements of the record is mostly grey, into synonymy.

>When making a name a synonym any Nomenclatural status is acceptable to Rhakhis, with the exception of Deprecated.
                

1) In the Placement box, select _Sink into synonymy within..._

2) Begin typing the accepted taxon into box. Rhakhis will begin to suggest accepted taxa to select from. When you find the accepted taxon select it using your cursor.

The name will now be placed as a synonym of the accepted taxon. 

### Moving a Synonym

> Why?
>
> Moving an accepted taxon affects all names linked to it. Requiring
> curators to explicitly reassign synonyms helps ensure that taxonomic
> changes are deliberate and fully reviewed.

1) In the Placement box, select _Change to synonym of..._

2) Begin typing the accepted taxon in to box. Rhakhis will begin to suggest accepted taxa to select from. When you find the accepted taxon select it using your cursor.

If you are moving a currently accepted taxon you will need to transfer all the existing synonyms to the new accepted taxon before finally transferring the accepted taxon to the synonym. We have enforced this to make curators to make a conscious decision when moving synonyms. 

### Adding a Basionym

To add a basionym to a record

1) In the Homotypic Names box click add _Add Basionym_

2) Rhakhis will suggest likely Basionym candidates based on the the epithet and the year of publication.

3) If the basionym name is not there then you can type in the box and search for the required name.

Rhakhis prevents the creation of basionym chains. You cannot place a name as the basionym when the proposed basionym record already has a basionym of its own. This is usually the reason you cannot find a name when searching. This will require further editing of records if the data is not correct in Rhakhis. This can often be difficult to resolve. Please contact Alan Elliott if assistance is required.

> Why?
>
> A basionym is intended to identify the original name upon which later
> combinations are based. Preventing basionym chains ensures these
> relationships remain unambiguous and traceable.

### Nomenclatural Reference

Rhakhis is not a reference manager and only stores links to references.

A link to IPNI is desirable as the WFO aim to have this link to the nomenclators, Tropicos for Bryophytes, IPNI for the other groups covered by the WFO.

The WFO take monthly updates from IPNI. If the added name is a newly published name, or an old name from the literature please inform IPNI and we will receive the IPNI ID from them in the future.

The work plan to improve usability of Rhakhis will bring in other pieces of nomenclatural data, such as Type Specimen links to external Herbarium catalogues, full references to the publication if it has a DOI etc.

>As of July 2023: 600k BHL links to historic publications and 45K DOI link to more recent protologues supplied by IPNI have been added. 

# References

## Why References Matter

Rhakhis does not attempt to duplicate the functionality of specialist
bibliographic, specimen or nomenclatural databases. Instead, it records
persistent links to authoritative external resources that support
taxonomic and nomenclatural decisions.

References therefore provide the evidence behind a classification rather
than storing that evidence directly within Rhakhis.

### References Overview


#### Adding References

The scope of Rhakhis is nomenclature and taxonomy. We are working to make it as complete and authoritative as possible. Progress would be slower if we also tried build a system for managing ancillary data and, for example, incorporated a full citation manager or specimen catalogue. Those functions are better performed by other systems elsewhere on the internet. Certain classes of data are therefore handled by _References_ to other systems. These can be presented as decorated links in user interfaces and documents or can be explored by software agents.

> Why?
>
> Rhakhis focuses on nomenclature and taxonomy. Specialist systems are
> generally better suited to managing bibliographic, specimen and
> publication data. Rhakhis therefore links to authoritative sources
> rather than attempting to duplicate them.

### Taxonomic References

Each branch of the taxonomy within Rhakhis is supported by some external source. We therefore aim to have a Reference in the Taxonomic Source section for each accepted taxon that links to the authority we use to assert that taxon exists and has those synonyms. Ideally this will be a single database reference and/or a single literature reference although this isn't currently enforced by the system. An analogy is the linking to external sources for statements of fact in Wikipedia. Sometimes this Reference may be at a higher level within the taxonomy than the current taxon e.g. a single Taxonomic Source for a whole genus or family.

### Nomenclatural References

All names should have nomenclatural references. Eventually they will all have links to the original place of publication but it is appropriate to include any reference here that would be useful for someone researching the nomenclatural aspects of this name. These might include links to the authors and type specimens or nomenclatural databases (e.g. [IPNI](https://www.ipni.org/)) that contain such information. It would be inappropriate to have links here to simple occurrences of the name such as in a flora or occurrence database like [GBIF](https://www.gbif.org/) unless these were the only known source of the name and would be useful to figure out the place of publication etc.

The process of adding a reference is the same for both. 

### Types of Reference

#### Literature

It is common to have a list of literature references with no URIs. Typically this is because they don't have DOIs because they are too old to have been given one. There are different approaches you could take:

1.  If the publication is in the [Biodiversity Heritage Library](https://www.biodiversitylibrary.org/) you can link to it there. This can either be done using the BHL link or a DOI they have minted for their publications. There is a [BHL working group](https://blog.biodiversitylibrary.org/2021/05/persistent-identifier-working-group.html) on this.
2.  Check if the treatment is in [Plazi TreatmentBank](https://plazi.org/treatmentbank/) and engage with them in getting literature submitted if possible.
3.  Link to an entry in [WikiData](https://www.wikidata.org/) for the article or book. If one doesn't exist you can create it. Put the page information in the name\_reference comment if that is appropriate, e.g. the page in a book so you don't have to create a WikiData entry for every page.
4.  If you can't or don't want to create article level entries in [WikiData](https://www.wikidata.org/) you can link to the publication (e.g. The book or journal) entry and include the details of the volume, page and article title in the name\_reference comment.

We will work to come up with more detailed guidance on creating links to literature in the future.

#### Database

If the database isn't available online then we can't link to it. If you have a heritage database that is unlikely to be made available online but can be stored in an archival way (e.g. CSV files not Microsoft Access) then you could consider submitting it to [Zenodo](https://zenodo.org/) for safe keeping. This will create a DOI for the dataset that you can then use as the link.

#### Person

If the person is alive then you should use their [ORCID](https://orcid.org/) as the link. If they don't have one you could ask them to register. If they don't want to register then you can't link to them. As a human they have a right not to be involved.

If the person is historical (a.k.a. dead) then you can link to them in [WikiData](https://www.wikidata.org/), creating an entry if need be. Don't try and solve the problem of no ORCID by moving someone from the alive to historical. That would not be ethical.

This example is uses a member of the TEN who has checked the protologe and based on their knowledge of the group decided on the placement. The comment explains the reason for the placement.
<img width="919" height="595" alt="image" src="https://github.com/user-attachments/assets/c898e251-1463-43ff-8a25-a23f5b45019b" />


#### Specimens

We only provide the ability to cite specimens if they are available online as an entry in a catalogue or image. If you have an image of the specimen and it is unlikely to be put online by the holding institution then you might consider uploading it to [Zenodo](https://zenodo.org/) where it will be given a DOI that you can cite. If you only have text you can add it to the comments on the name.

This example is to a specimen on Jstor Plants. The comment gives the narrative for the decision and is visible on the public portal.
<img width="894" height="574" alt="image" src="https://github.com/user-attachments/assets/267b8888-e4e8-4daf-8a78-7612e7b5597e" />


# Curators

Curators are responsible for maintaining the accuracy of the World Flora
Online backbone within the taxonomic scope assigned to them.

Curators can:

- create new name records;
- edit nomenclatural data;
- place names as accepted taxa or synonyms;
- add references;
- assign curator permissions within their area of responsibility.

If you require curator access, please contact your TEN focal or Alan Elliott.
