# Rhakhis Users Handbook

Guide to Using Rhakhis - the World Flora Online's taxonomic backbone curation tool.

It is currently a work in progress (14-7-2023) and is being added to and amended as we go. We are currently adding how to videos through the document to guide users.

If you are looking for the [Concepts Model](https://github.com/rogerhyam/wfo-plant-list-docs/blob/main/docs/concepts.md) this explains the reasons and process behind Rhakhis' functionality rather than how to use the editor.

[1. Getting Started](#getting-started)<br><br>
[2. Navigation tabs](#navigation-tabs)<br>
&nbsp;[2.1. A-Z](#a-z)<br>
&nbsp;[2.2. Matching](#matching)<br>
&nbsp;[2.3. Browse](#browse)<br>
&nbsp;[2.4. Add a Name](#add-name)<br>
&nbsp;[2.5. Stats](#stats)<br>
&nbsp;[2.6. User](#user)<br>
&nbsp;[2.7. Activity](#activity)<br>
&nbsp;[2.8. Data](#data)<br><br>
[3. Name Record](#name-records)<br>
&nbsp;[3.1. Overview](#name-record-overview)<br>
&nbsp;[3.2. Adding a new name](#adding-a-new-name)<br><br>
[4. Editing Records](#editing-records)<br>
&nbsp;[4.1. Nomencaltural Data](#nomencaltural-data)<br>
&nbsp;[4.2. Placement of Names](#placement-of-names)<br><br>
[5. References](#references)<br>
&nbsp;[5.1. References Overview](#references-overview)<br>
&nbsp;[5.2. Taxonomic References](#taxonomic-references)<br>
&nbsp;[5.3. Nomenclatural References](#nomenclatural-references)<br>
&nbsp;[5.4. Adding References](#adding-references)<br>

# Getting Started

**Introduction Video**

<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/845234343?h=e5a851207f&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Rhakhis introduction."></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>

First sign-in with your [ORCID iD](https://orcid.org/).

The navigation tabs will become live and you can start using the system.

>The [A-Z tab](https://list.worldfloraonline.org/rhakhis/ui/#alpha) you can just start typing the name you are interested in and matching names will be suggested - like looking it up in an index.
>If you want to find a name that you might not be sure of the ending you can use the [Matching tab](https://list.worldfloraonline.org/rhakhis/ui/#match).
>The [Browse tab](https://list.worldfloraonline.org/rhakhis/ui/#browse) allows you to navigate the hierarchy of names and synonyms.
>[Add Name](https://list.worldfloraonline.org/rhakhis/ui/index.html#add). Allows you add a new name to the backbone, but check if it is already in. It forces an acknowledgement if there is a homonym.
>[Stats](https://list.worldfloraonline.org/rhakhis/ui/index.html#stats) tab generates a table of how many accepted taxa, synonyms, genera, species etc there are at the selected rank.
>[Users](https://list.worldfloraonline.org/rhakhis/ui/index.html#users) tab lists who has signed up, a link to their ORCID profile and the groups they have been assigned to curate.
>[Activity](https://list.worldfloraonline.org/rhakhis/ui/index.html#activity) tab shows you who last edited records in the backbone, at the moment it's select by User, we may implement by Family.
>Under the [Data tab](https://list.worldfloraonline.org/rhakhis/ui/#data) you'll find snapshot of data in different formats to download.


As a first time user you can view and download data but you cannot edit anything. If you are part of a Taxonomic Expert Network please contact your TEN Focal who can assign you to your group. If you are a new TEN email Alan Elliott to be assigned to your group.

[back to top](#rhakhis-users-handbook)

# Navigation Tabs

### A-Z

Begin by typing the name you are looking for. Rhakhis will begin suggesting names with the 1st letter typed. Keep typing until you see the record you find the Name you require.

  

This method of searching for a name returns exact what you type. For example if you type _Poa annua_ it will return the records that begin with _Poa annua._ If you misspell the name _Poa annum_ it will return no results. If you are unsure of spellings please use [Matching](https://list.worldfloraonline.org/rhakhis/ui/index.html#match) as its returns "like" results.

  

If you are searching for an infraspecific name do not insert the rank as it will return no results. Search only the name parts, for example "_Poa annua supina"._ This will return results for both the variety and subspecies records of this name.

**Color Coding of Records**

The results will show different coloured records. 

Red records are **deprecated** \- these signify that they should not be used, but can be resurrected by Curators. These can be deprecated from a number of reasons including duplication, being linked to a suppressed IPNI record, fossil names, errors, or names outside the scope of the WFO.

Yellow are records **placed** within classification and can be accepted names or synonyms.

Grey are currently **unplaced** records. These are effectively a nomenclatural records with no taxonomic status.

![](https://t2197470.p.clickup-attachments.com/t2197470/bc855ede-0f01-45a5-b39c-b4d259756aab/image.png)
  
### Matching

Matching requires at least 4 characters to work. It will suggest more then just the exact string searched this is useful where you are unsure of the epithet ending.

  

Matching also works with ranks being part of the name. It will still suggest more than the exact hit.

  

_"Poa annua_ subsp. _supina"_ for example will return the subspecies record and the two variety records of this name.

### Browse

The Browse Tab opens at our root record which is called Code, referring to the _International Code of Nomenclature for algae, fungi, and plants._

  

From here you can navigate down through the hierarchy using the Box to the Right called "Phyla". This has the main "groups" that the WFO curate: Angiosperms: Bryophytes, Gymnosperms and Pteridophytes.

  

![](https://t2197470.p.clickup-attachments.com/t2197470/6c5e557c-f014-4ea0-803d-abd9cfb72570/image.png)

  

Once you have navigated down through the ranks to the record you wish to look at you can use the breadcrumb trail to jump back through the hierarchy without having to start over.

  

![](https://t2197470.p.clickup-attachments.com/t2197470/16004e15-faba-4876-9313-bcbd4a102927/image.png)

### Add Name

To add a new name enter the name parts, with no ranks.

### Stats

The current family level statistics. These regenerate over time. Your edits will take a few days at most to show.

### Users

Who has logged in to the system and the groups they curate. 

If you are part of a Taxonomic Expert Network you will be assigned as the curator of the taxon and this gives you rights to edit that taxon, any descendant taxa and any synonyms of those taxa.

Once you have been made the Curator for your Family you can edit everything it contains. You will also now have the ability to assign colleagues as curators to any point in the part of the backbone you are assigned.

Unplaced names are not controlled by this authorization mechanism. An unplaced name can be edited by any user who is an editor of any taxon, but once that name is placed within the taxonomic hierarchy it is controlled by the editors of the associated taxa and becomes "locked" into the consensus taxonomy.

### Activity

This tab shows the most recent least edit to a record by a user. We plan to implement a filter by Family.

### Data

The data download tab allows users to export data in a number of formats.

If you think of others please, contact Roger Hyam.


# Name Records

### Name Record Overview 

**Color Coding of Records**

Red records are **deprecated** \- these signify that they should not be used, but can be resurrected by Curators. These can be deprecated from a number of reasons including duplication, being linked to a suppressed IPNI record, fossil names, errors, or names outside the scope of the WFO.

Yellow are records **placed** within classification and can be accepted names or synonyms.

Grey are currently **unplaced** records. These are effectively nomenclatural records with no taxonomic status.

![](https://t2197470.p.clickup-attachments.com/t2197470/bc855ede-0f01-45a5-b39c-b4d259756aab/image.png)


### Adding a new name

<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/847250597?h=15009c38d6&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="New Recording - 21/07/2023, 08:59:52"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>

Please see below for details about how to create specific ranks.

![](https://t2197470.p.clickup-attachments.com/t2197470/387adbb3-404d-4e8b-98ea-cc4be8336bb9/image.png)

For a **Genus** only a one name part if required. For example: *Poa* or *Rhododendron*.

For Infrageneric names two parts are required. The **Genus** and the **Infrageneric epithet**. For example: *Rhododendron* and *Vireya*.

For a **species** name two parts are required. The **Genus** and the **epithet**. For example: _Poa annua, Rhododendron ponticum_.

For an **infraspecific name** the **Genus**, the **species** **epithet** and **infraspecific epithet** are required. For example: _Poa annua annua, Rhododendron ponticum ponticum_.

For **supra-generic ranks** (subfamily, subfamily, supertribe, tribe) these only require a one part name. For example: *Ericoideae*, *Phyllodoceae*, *Rhodoreae*.


>**You select the rank in the name record once it has been created.**

Rhakhis will check if the name exists before allowing you to continue. It the name does not exist the Create button will become active and you can create the record.
 
![](https://t2197470.p.clickup-attachments.com/t2197470/a4aade91-4077-4a29-8c97-1a659e09022f/image.png)

Rhakhis will also suggest name records that exist that might be the same thing.

If you add a name that is a 100% match on the name parts, then you must, click the checkboxes to acknowledge that you are about to add another homonym before the Create button becomes active.

![](https://t2197470.p.clickup-attachments.com/t2197470/be3905c7-8421-4e4b-acc8-ee2c6e20ae72/image.png)

It is now time to start editing.  

![](https://t2197470.p.clickup-attachments.com/t2197470/7c6fc355-d1f1-4222-8d69-3ad6184bf631/image.png)


# Editing Records

As a curator you can edit any unplaced record and any records that are within the group you are assigned to curate. Sometimes you may find a name that has been placed as a synonym in a Family outside what you are able to curate. Please contact Alan Elliot in this instance.

### Rank

Please select the appropriate rank from the drop down. Rhakhis will default to Genus for a one part name, species for a two part name and a subspecies for a three part name. 

![](https://t2197470.p.clickup-attachments.com/t2197470/f13b0b55-2a96-4371-bb4f-c666ad74bee1/image.png)
  

### Nomenclatural Status

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

### Author string
  
Should follow the Standard Form abbreviation.

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


### Protologue information

Should follow the Standard Form abbreviation.

Please refer to IPNI. [www.ipni.org](http://www.ipni.org/)

Using advanced search and the Publications Tab.
  

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

>**Please note if you need to synonymise a name already placed in the classification but outside of the group are are assigned, please contact your TEN Focal, or Alan Elliott, for assistance.**

# Placement of an accepted record
 
To place as an accepted taxon

1) Change the Nomenclatural status to Valid. The nomenclatural status of a name must be Valid to be an accepted name. 

![](https://t2197470.p.clickup-attachments.com/t2197470/8704f3ac-3942-4510-afa0-0141d84d6c35/image.png)

2). In the Placement box select _Raise to accepted taxon within._

Rhakhis will suggest the appropriate parent in this example, _Agapetes_ as it can only be an accepted species in this Genus.

![](https://t2197470.p.clickup-attachments.com/t2197470/818abc38-5ec0-4b67-a833-03bb8e02b9e8/image.png)

Rhakhis will not allow you to place names that do not align with an accepted parent record. For example _Lathyrus_ _sylvestris_ can only be an accepted name in _Lathyrus_, or an accepted infrageneric group within _Lathyrus_. The same is true for infraspecific names. For example _Lathyrus_ _latifolius_ subsp. _latifolius_ can only be placed as an accepted name within _Lathyrus latifolius_.

If Rhakhis does not suggest an appropriate parent record it is because the name is not present in the database or is not accepted in the classification.  

# Placing as a synonym

This is how to place a name record that has yet to be placed in the classification, the elements of the record is mostly grey, into synonymy.

>When making a name a synonym any Nomenclatural status is acceptable to Rhakhis, with the exception of Deprecated.
                

1) In the Placment box, select _Sink into synonymy within..._

2) Begin typing the accepted name into box. Rhakhis will begin to suggest accepted names to select from. When you find the accepted name select it using your cursor.

The name will now be placed as a synonym of the accepted name. 

# Moving a synonym

1) In the Placment box, select _Change to synonym of..._

2) Begin typing the accepted name in to box. Rhakhis will begin to suggest accepted names to select from. When you find the accepted name select it using your cursor.

If you are moving a currently accepted name you will need to transfer all the existing synonyms to the new accepted name before finally transferring the accepted name to the synonym. We have enforced this to make curators to make a conscious decision when moving synonyms. 


# Adding a Basionym

To add a basionym to a record

1) In the Homotypic Names box click add _Add Basionym_

2) Rhakhis will suggest likely Basionym candidates based on the the epithet and the year of publication.

3) If the basionym name is not there then you can type in the box and search for the required name.

Rhakhis prevents the creation of basionym chains. You cannot place a name as the basionym when the proposed basionym record already has a basionym of its own. This is usuallly the reason you cannot find a name when searching. This will require further editing of records if the data is not correct in Rhakhis. This can often be difficult to resolve. Please contact Alan Elliott if assistance is required.


### Nomenclatural Reference

Rhakhis is not a reference manager and only stores links to references.

A link to IPNI is desirable as the WFO aim to have this link to the nomenclators, Tropicos for Bryophytes, IPNI for the other groups covered by the WFO.

The WFO take monthly updates from IPNI. If the added name is a newly published name, or an old name from the literature please inform IPNI and we will receive the IPNI ID from them in the future.

The work plan to improve usability of Rhakhis will bring in other pieces of nomenclatural data, such as Type Specimen links to external Herbarium catalogues, full references to the publication if it has a DOI etc.

>As of July 2023: 600k BHL links to historic publications and 45K DOI link to more recent protologues supplied by IPNI have been added. 

# References
### References Overview

INSERT VIDEO HERE.

#### Adding References

The scope of Rhakhis is nomenclature and taxonomy. We are working to make it as complete and authoritative as possible. Progress would be slower if we also tried build a system for managing ancillary data and, for example, incorporated a full citation manager or specimen catalogue. Those functions are better performed by other systems elsewhere on the internet. Certain classes of data are therefore handled by _References_ to other systems. These can be presented as decorated links in user interfaces and documents or can be explored by software agents.

### Taxonomic References

Each branch of the taxonomy within Rhakhis is supported by some external source. We therefore aim to have a Reference in the Taxonomic Source section for each accepted name that links to the authority we use to assert that taxon exists and has those synonyms. Ideally this will be a single database reference and/or a single literature reference although this isn't currently enforced by the system. An analogy is the linking to external sources for statements of fact in Wikipedia. Sometimes this Reference may be at a higher level within the taxonomy than the current taxon e.g. a single Taxonomic Source for a whole genus or family.

### Nomenclatural References

All names should have nomenclatural references. Eventually they will all have links to the original place of publication but it is appropriate to include any reference here that would be useful for someone researching the nomenclatural aspects of this name. These might include links to the authors and type specimens or nomenclatural databases (e.g. [IPNI](https://www.ipni.org/)) that contain such information. It would be inappropriate to have links here to simple occurrences of the name such as in a flora or occurrence database like [GBIF](https://www.gbif.org/) unless these were the only known source of the name and would be useful to figure out the place of publication etc.

The process of adding a reference is the same for both. 

**ADD VIDEO HERE**

### Types of Reference


### What if I don't have a URI for my reference?

#### Database

If the database isn't available online then we can't link to it. If you have a heritage database that is unlikely to be made available online but can be stored in an archival way (e.g. CSV files not Microsoft Access) then you could consider submitting it to [Zenodo](https://zenodo.org/) for safe keeping. This will create a DOI for the dataset that you can then use as the link.

#### Literature

It is common to have a list of literature references with no URIs. Typically this is because they don't have DOIs because they are too old to have been given one. There are different approaches you could take:

1.  If the publication is in the [Biodiversity Heritage Library](https://www.biodiversitylibrary.org/) you can link to it there. This can either be done using the BHL link or a DOI they have minted for their publications. There is a [BHL working group](https://blog.biodiversitylibrary.org/2021/05/persistent-identifier-working-group.html) on this.
2.  Check if the treatment is in [Plazi TreatmentBank](https://plazi.org/treatmentbank/) and engage with them in getting literature submitted if possible.
3.  Link to an entry in [WikiData](https://www.wikidata.org/) for the article or book. If one doesn't exist you can create it. Put the page information in the name\_reference comment if that is appropriate, e.g. the page in a book so you don't have to create a WikiData entry for every page.
4.  If you can't or don't want to create article level entries in [WikiData](https://www.wikidata.org/) you can link to the publication (e.g. The book or journal) entry and include the details of the volume, page and article title in the name\_reference comment.

We will work to come up with more detailed guidance on creating links to literature in the future.

#### Person

If the person is alive then you should use their [ORCID](https://orcid.org/) as the link. If they don't have one you could ask them to register. If they don't want to register then you can't link to them. As a human they have a right not to be involved.

If the person is historical (a.k.a. dead) then you can link to them in [WikiData](https://www.wikidata.org/), creating an entry if need be. Don't try and solve the problem of no ORCID by moving someone from the alive to historical. That wouldn't be ethical.

#### Specimens

We only provide the ability to cite specimens if they are available online as an entry in a catalogue or image. If you have an image of the specimen and it is unlikely to be put online by the holding institution then you might consider uploading it to [Zenodo](https://zenodo.org/) where it will be given a DOI that you can cite. If you only have text you can add it to the comments on the name.



# Curators


