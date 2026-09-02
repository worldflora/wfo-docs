## Deploying the WFO Infrastructure

The infrastructure consists of 5 applications in two groups that interact.
Each application has its own GitHub repository (or two in the case of Rhakhis) with associated README.md documentation describing how to 
to install it. This page gives an overview of the commonalities between the applications, where they 
might be installed and how they interact.

### Publishing applications
- __Website__ - Publishes the public facing view
- __List API__ - that publishes the public APIs
### Curation/edit applications
- __Rhakhis__ - for editing the backbone
- __Fyllo__ - for binding text content stored in GitHub to the portal
- __Apache Airflow__ - Orchestrates workflows that move data between applications

### Design pattern

Apart from the Apache Airflow (which uses workflows written in Python) the applications are LAMP (Linux, Apache, MySQL, PHP)
