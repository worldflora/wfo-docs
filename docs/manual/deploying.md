## Deploying the WFO Infrastructure

The infrastructure consists of 5 applications in two groups (publishing and curation) that interact.
Each application has its own GitHub repository (or two in the case of Rhakhis) with associated README.md documentation describing how to 
to install it. This page gives an overview of the commonalities between the applications, where they 
might be installed and how they interact.

### Publishing applications
- __Website__ - Publishes the public facing view. A PHP application that queries a Apache SOLR index for data (LAMP without MySQL). Repository: [wfo-p2](https://github.com/worldflora/wfo-p2) (p2 originally named for "Portal 2.0")
- __List API__ - that publishes the public APIs. A PHP application that queries a Apache SOLR index for data (LAMP without MySQL). Repository: [wfo-plant-list](https://github.com/worldflora/wfo-plant-list) (Named for its original purpose was to server the plant list alone.)
### Curation applications
- __Rhakhis__ - for editing the backbone. Repositories: [wfo-backbone-management](https://github.com/worldflora/wfo-backbone-management) A full LAMP (Linux, Apache, MySQL, PHP) application that provides a management interface and a private API for the front end Bootstrap-React Javascript application [wfo-backbone-ui](https://github.com/worldflora/wfo-backbone-ui).
- __Fyllo__ - for binding text content stored in GitHub to the portal.  A full LAMP (Linux, Apache, MySQL, PHP) application. Repository: [wfo-fyllo](https://github.com/worldflora/wfo-fyllo).
- __Apache Airflow__ - Orchestrates workflows that move data between applications. A Java application framework with workflows written in Python. Repository: [wfo-airflow](https://github.com/worldflora/wfo-airflow).

### Design pattern

Apart from Apache Airflow (which uses workflows written in Python) and the Rhakhis front end (which is ) the 
applications run on the LAMP (Linux, Apache, MySQL, PHP) application stack and have the same basic design pattern.

- __WFO HOME__ <- a base directory in which to install the applications. This will typically be /var/wfo or similar
  - __application__ <- the application directory. This is typically a direct clone of the GitHub repository created with `git clone <url>`.
    - __www__ <- web root for the application. There should be a virtual host set up in Apache config to serve this directory to the web on a subdomain e.g. `list.worldfloraonline.org`.
      - __style__ <- css stuff
      - __scripts__ <- javascript used in page rendering
      - __data or downloads__ <- data files that need to be downloadable. This directly will frequently need to be web writeable so that download and/or cache files can be created by the user. Something like `sudo chown -R ubuntu:www-data downloads/` on install.
    - __include(s)__ <- code used in www but not served directly
    - __scripts__ <- code run on the command line and by cron jobs
  - __application_secrets.php__ <- configuration variables that shouldn't be checked into GitHub like passwords and API keys. There should be a template version of this file in the application root that you can copy down a layer and edit.
 
### Locations

Data curation applications and the data publishing applications should never be on the same machine. They function entirely separately and have different requirements.

