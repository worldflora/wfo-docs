---
title: WCVP - IPNI link test
---

This describes the manual procedure to check the following:
  1. All names in WCVP will have valid IPNI IDs
  2. The IPNI records referenced will be top copy records.
  3. The IPNI records referenced will not be flagged as suppressed.
  4. All names in WCVP will reference the “correct” record in IPNI.

## 1. Download the data

Download the latest IPNI dump from this location:  [https://storage.googleapis.com/ipni-data/ipniWebName.csv.xz](https://storage.googleapis.com/ipni-data/ipniWebName.csv.xz)

Download the latest WCVP dump from this location: [http://sftp.kew.org/pub/data-repositories/WCVP/wcvp.zip](http://sftp.kew.org/pub/data-repositories/WCVP/wcvp.zip)

You could look at the directories before downloading the files to check the creation time of the version you are looking at:

IPNI dump dir:  [https://storage.googleapis.com/ipni-data](https://storage.googleapis.com/ipni-data)

WCVP dump dir: [http://sftp.kew.org/pub/data-repositories/WCVP](http://sftp.kew.org/pub/data-repositories/WCVP)

## 2. Unzip and rename the files

For some reason IPNI usse xz compression but it should just unzip on the desktop.

Rename them to ipni.csv and wcvp.csv so that the table have sensible names in the next step. It is the wcvp_names.csv file you want from the ones that come in the wcvp download.

## 3. Import files to SQLite

Fire up DB Browser of SQLite or whatever your SQLite client is.

Create a new database.

Import the IPNI file as a new table File > Import > Table from CSV file ... Note that this is pipe character separated file (not comma delimited!).

Import the WCVP file as a new table in the same way. Note you need to set the delimiter character to empty/null or you'll get and end of file exception.

We now have all the files we need to do some comparisons using SQL queries.

## 4. All names have WCVP?

`
select 
	printf("%,d", count(*)) as 'total', 
	printf("%,d", count(ipni_id)) as "with IPNI",
	printf("%,d",  count(*) - count(ipni_id)) as "missing IPNI",
	round(cast(count(*) - count(ipni_id) as float) / cast(count(*) as float) * 100) as "missing IPNI %",
	printf("%,d",  count(CASE WHEN ipni_id LIKE "%-4" THEN 1 END)) as "dash-4 names"
from wcvp;
`
Get a list of the missing ones

`SELECT * FROM wcvp WHERE ipni_id is NULL;`

## 5. All IPNI IDs in WCVP are in IPNI

Seems like an obvious test but worth doing

`
SELECT
	wcvp.*
FROM wcvp
LEFT JOIN IPNI  on  concat('urn:lsid:ipni.org:names:', wcvp.ipni_id) = ipni.id 
WHERE wcvp.ipni_id is not NULL
AND ipni.id is NULL
`

## 6. Count top copies and suppressed
`
SELECT
	printf("%,d",  count(*)) as "total",
	printf("%,d", count(CASE WHEN  ipni.suppressed_b = "t" THEN 1 END)) as "suppressed",
	printf("%,d", count(CASE WHEN  ipni.top_copy_b != "t" THEN 1 END)) as "not top copy"
FROM wcvp
LEFT JOIN IPNI  on  concat('urn:lsid:ipni.org:names:', wcvp.ipni_id) = ipni.id 
WHERE wcvp.ipni_id is not NULL
AND ipni.id is not NULL;
`







