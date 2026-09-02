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

Apart from Apache Airflow and the Rhakhis UI the applications have the __roughly__ the same design pattern.

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

#### Publishing applications locations.

There are multiple ways the Website and List API could be deployed. They both need to interact with a Apache SOLR index which should be on the same machine or LAN in a production environment. (In development/testing environments they can talk to SOLR over the internet but this will be much slower.)

1. __All on one machine:__ This is the simplest approach and is probably the one to start with. A single Linux box with SOLR 8.* and PHP 8.* hosts two Apache virtual hosts, one for the website and one for the List API.
2. __Split out the index:__ Apache SOLR is given its own machine. (This could be a Docker container instance if the infrastructure supports that.) A second machine hosts the Website and List API.
3. __Parallelise the front end:__ An enhancement of 2 would be to have multiple machines serving the website and api applications but all talking to the same SOLR index. A hardware based round robin DNS (or similar) load balance would need to maintain user sessions between the machines.
4. __Parallelise the back end:__ There are many options to scale SOLR index performance using SolrCloud. Unlikely to be necessary.

There could be multiple instances of the publishing applications deployed around the world. An institution could, for example, have its own instance of the List API locally for performance and stability. There is only one issue with this approach. The taxonomic backbone is imported as a six monthly JSON dump file but the text content is pushed to the live index by the Airflow application from Fyllo. Currently the workflow can only target one instance at a time but methods for cloning between SOLR indexes could be developed if the functionality was needed.

#### Curation applications locations

Ideally these should all be on the same machine or same LAN. Airflow needs to access the MySQL database behind Rhakhis but not Fyllo. Airflow also needs to be able access the publishing server over HTTPS for API calls.


