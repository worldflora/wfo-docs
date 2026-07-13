---
title: Index structure
---

The data that is displayed in the public website and via the API is all stored in a [Apache SOLR](https://solr.apache.org/) index. Understanding how it all gets there and how it is structured is key to understanding how the website and API function as well as the systems that feed data into the index. Because multiple systems are involved it can be confusing jumping around the documentation. This page is here to give an over view and hopefully act as a single source of truth.

## The SOLR schema

A SOLR index is a collection of documents. Each document is a flat list of fields containing the data. Fields have a specific data type and can be single or multi-valued. Unlike an SQL database tables the documents don't all have to have the same fields. 

Document fields can be specified in broadly two ways, as part of the configuration or dynamic field mappings can be used whereby the data type is indicated by the ending of the field name. WFO use dynamic fields almost exclusively along with the standard ending-to-type mappings that come with SOLR. This makes it very simple to set up a new instance of the index and populate it. A new core is created and (typically using the web admin interface) a single copy from * and to `_text_` is defined. This means all text added in any field will be available in the `_text_` field if necessary. From that point on the applications contributing data to the index can just provide whatever fields they like. It is all very flexible but there needs to be conventions field names to prevent chaos. The conventions are defined here.

In production the SOLR index is protected behind firewalls and by passwords.

## Kinds of documents stored

## How to delete the metadata elements so they re-index



This is done through the SOLR web admin interface

  1. Select the correct index usually "wfo-portal"
  2. Select the Documents tool so we are using the /update handler as opposed to the query handler
  3. Pick the "SOLR Command raw or XML format.
  4. Put the delete command in to the Documents box e.g. ```{"delete":{"query":"kind_s:wfo-facet-value-score"} }```
  5. Change the commit to 1
  6. Submit the form

