---
title: Current deployments
---

This is a technical description of the current deployments of applications to support the World Flora Online publication pipeline.

## Editing platform
  - [rhakhis-live.rbge.info](https://rhakhis-live.rbge.info) - the live version of the Rhakhis classification editor hosted on the __AWS server__.
  - [rhakhis-test.rbge.info](https://rhakhis-test.rbge.info) - the test version of Rhakhis hosted on __prajna6 a RBGE__. This is used for testing and training. The data is overwritten every night with a copy of the data on Rhakhis live.
  - [fyllo.rbge.info](https://fyllo.rbge.info) - the live version of the Fyllo content editor. There is no publicly visible test version of this application as there are so few editing users and little need for training. It is hosted on the __AWS server__.
  - __Airflow__ - the Apache Airflow workflow manager that orchestrates building of files and updating of test portal via APIs. Hosted on the __AWS server__ as it is now so it has access to the top copy data easily.. (URL not shared here)
  - [GitHub text repository](https://github.com/worldflora/wfo-text-content) This is where we curate the CSV text files that feed into the website via Fyllo and Airflow.

## Public portal

### Current
  - [WFO main website](https://www.worldfloraonline.org/) The current main public website. [eMonocot system not documented here and scheduled for retirement in 2027] - hosted at __MOBOT__.
  - [WFO about pages](https://about.worldfloraonline.org/) This will be retired in 2027 along with the eMonocot system. The content will form part of the new website. [Craft CMS system not documented here] - hosted at __MOBOT__.
  - [WFO Plant List public site](https://wfoplantlist.org/) This is a public view of the current classification that will be replaced by the new website in 2027. [Craft CMS system not documented here] - this calls the live WFO Plant List API on the same server for the data it renders __MOBOT__.
### Replacements
  - [wfo2-portal.worldfloraonline.org](https://wfo2-api.worldfloraonline.org/) - a test version of the WFO public portal. This server will become [WFO main website](https://www.worldfloraonline.org/) when the eMonocot system is retired. Hosted at __MOBOT__.
  - [wfo-test.rbge.info](https://wfo-test.rbge.info) - the test version of the new portal. Hosted on __prajna6 at RBGE__. This is in development. The data consists of the latest solstice classification from Rhakhis augmented with data from Fyllo by services run on Airflow.

## API instances

### Current
  - [list.worldfloraonline.org](https://list.worldfloraonline.org) - the live version of the WFO Plant List API including GraphQL API and name matching tools. Based on the last publicly released (solstice) version of the classification from Rhakhis. Hosted at __MOBOT__.

### Replacements
  - [wfo2-api.worldfloraonline.org](https://wfo2-api.worldfloraonline.org/) - a test version of the WFO Plant List API. This server will become [list.worldfloraonline.org](https://list.worldfloraonline.org) when the eMonocot system is retired. Hosted at __MOBOT__.
  - [list-test.rbge.info](https://list-test.rbge.info) -  a test version of the WFO Plant List API as above. Hosted on __prajna6 at RBGE__. This runs off the same data as [wfo-test.rbge.info](https://wfo-test.rbge.info).
  - [list-weekly.rbge.info](https://list-weekly.rbge.info) -  a test version of the WFO Plant List API as above. Hosted on __prajna6 at RBGE__. The data behind this is updated weekly from Rhakhis rather than twice yearly so as to enable testing and give access to the name matching tools on the most recent data before it is officially released.
  
