---
title: Current deployments
---

This is a technical description of the current deployments of applications to support the World Flora Online publication pipeline.



## Organised by URL

  - [rhakhis-live.rbge.info](https://rhakhis-live.rbge.info) - the live version of the Rhakhis classification editor hosted on the __AWS server__.
  - [rhakhis-test.rbge.info](https://rhakhis-test.rbge.info) - the test version of Rhakhis hosted on __prajna6 a RBGE__. This is used for testing and training. The data is overwritten every night with a copy of the data on Rhakhis live.
  - [fyllo.rbge.info](https://fyllo.rbge.info) - the live version of the Fyllo content editor. There is no publicly visible test version of this application as there are so few editing users and little need for training. It is hosted on the __AWS server__.
  - __Airflow__ - the Apache Airflow workflow manager that orchestrates building of files and updating of test portal via APIs. Hosted on the __AWS server__ as it is now so it has access to the top copy data easily.. (URL not shared here)
  - [list.worldfloraonline.org](https://list.worldfloraonline.org) - the live version of the WFO Plant List API including GraphQL API and name matching tools. Based on the last publicly released (solstice) version of the classification from Rhakhis. Hosted at __MOBOT__.
  - [list-test.rbge.info](https://list-test.rbge.info) -  the test version of the WFO Plant List API as above. Hosted on __prajna6 at RBGE__. The data behind this is updated weekly from Rhakhis rather than twice yearly so as to enable testing and give access to the name matching tools on the most recent data before it is officially released.
  - [wfo-test.rbge.info](https://wfo-test.rbge.info) - the test version of the new portal. Hosted on __prajna6 at RBGE__. This is in development. The data consists of the latest solstice classification from Rhakhis augmented with data from Fyllo by services run on Airflow.
  - [WFO Plant List public site](https://wfoplantlist.org/) [Craft CMS system not documented here] - this calls the live WFO Plant List API on the same server for the data it renders.
  - [WFO About Pages](https://wfoplantlist.org/) [Craft CMS system not documented here] - hosted at __MOBOT__. Data is pulled directly from the Plant List API on the same machine.
  - [WFO about pages](https://about.worldfloraonline.org/) [Craft CMS system not documented here] - hosted at __MOBOT__.
  - [WFO main website](https://www.worldfloraonline.org/) [eMonocot system not documented here] - hosted at __MOBOT__.


## Organised by "physical" location

  - __AWS server__ is and instance of Ubuntu Linux running on a virtual server provided by Amazon Web Services in Europe.
    - [rhakhis-live.rbge.info](https://rhakhis-live.rbge.info)
    - [fyllo.rbge.info](https://fyllo.rbge.info)
    - Airflow
  - __prajna6__ is a test server running at the Royal Botanic Garden Edinburgh. It is the same configuration as the AWS live server.
    - [rhakhis-test.rbge.info](https://rhakhis-test.rbge.info)
    - [list-test.rbge.info](https://list-test.rbge.info)
    - [wfo-test.rbge.info](https://wfo-test.rbge.info)
  - __MOBOT About__ is another Ubuntu Linux server running on the Missouri Botanic Garden infrastructure.
    - [list.worldfloraonline.org](https://list.worldfloraonline.org)
    - Craft CMS system (not documented here)
      - [WFO Plant List public site](https://wfoplantlist.org/) 
      - [WFO about pages](https://about.worldfloraonline.org/)
  - __MOBOT eMonocot__ Run by Missouri Botanic Gardens
    - [WFO main website](https://www.worldfloraonline.org/) [eMonocot system not documented here] 
