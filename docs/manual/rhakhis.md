---
title: Rhakhis Technical Manual
---

This is a technical description of the Rhakhis application for system administrators and developers. There are two separate parts of the Rhakhis system:

## Backend

The back-end of the Rhakhis application is a LAMP (Linux, Apache, MySQL,PHP) application. It consists of:

  1. A MySQL database for the main data.
  2. A MySQL database for synchronisation of IPNI data.
  3. Utility scripts in PHP or Bash that are run on the command line, by cron or by Airflow. (These are being migrated to Python so that they can run entirely in Airflow in the future).
  4. Simple PHP web pages used by the Taxonomic Expert Network manager to do bulk imports and administrative tasks.
  5. A GraphQL API endpoint that is used to read and write data by the Rhakhis frontend.

[More details in the Rhakhis backend Github repository](https://github.com/worldflora/wfo-backbone-management).

## Frontend 

The frontend is used to edit data in the MySQL database by taxonomic experts. It is a [React Boostrap](https://react-bootstrap.github.io/) Javascript application that uses the [Apollo](https://www.apollographql.com/) client libraries to interact with the Rhakhis Backend.

The frontend could be hosted anywhere so long as it is configured with the location of the backend's GraphQL end point. In practice it is always deployed on the same server as he backend.

[More details in the Rhakhis frontend Github repository](https://github.com/worldflora/wfo-backbone-ui).

## Authentication

Authentication is handled by the [ORCID](https://orcid.org/) API. All human users must be authenticated using their ORCID accounts. (There are a couple of default users that scripts authenticate with that don't use ORCID.) The backend server needs to be able to see the ORCID API server for the authentication handshakes to work.

## Authorisation

User rights are controlled by the user table in the Rhakhis database plus PHP code. There are only three roles:

  - 'nobody' users are those that have authenticated via ORCID but not be assigned any rights.
  - 'editor' users are nobodies who have been given rights to a taxon. They can edit that taxon and any taxa or names below it in the hierarchy plus any non-placed names. They can also assign other editors and nobodies to become editors of taxa they control.
  - 'god' users can edit any name/taxon via the frontend and also access the administrative pages.
