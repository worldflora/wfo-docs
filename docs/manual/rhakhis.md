---
title: Rhakhis Technical Manual
---

This is a technical description of the Rhakhis application for system administrators and developers.

## Overview

There are two separate parts of the Rhakhis system:

### Backend

The back-end of the Rhakhis application is a LAMP (Linux, Apache, MySQL,PHP) application. It consists of:

  1. A MySQL database for the main data.
  2. A MySQL database for synchronisation of IPNI data.
  3. Utility scripts in PHP or Bash that are run on the command line, by cron or by Airflow. (These are being migrated to Python so that they can run entirely in Airflow in the future).
  4. Simple PHP web pages used by the Taxonomic Expert Network manager to do bulk imports and administrative tasks.
  5. A GraphQL API endpoint that is used to read and write data by the Rhakhis frontend.

More details on the Rhakhis backend.

### Frontend 

The frontend is used to edit data in the MySQL database by taxonomic experts. It is a [React Boostrap](https://react-bootstrap.github.io/) Javascript application that uses the [Apollo](https://www.apollographql.com/) client libraries to interact with the Rhakhis Backend.


