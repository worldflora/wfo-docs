

## How to delete the metadata elements so they re-index

This is done through the SOLR web admin interface

  1. Select the correct index usually "wfo-portal"
  2. Select the Documents tool so we are using the /update handler as opposed to the query handler
  3. Pick the "SOLR Command raw or XML format.
  4. Put the delete command in to the Documents box e.g. ```{"delete":{"query":"kind_s:wfo-facet-value-score"} }```
  5. Change the commit to 1
  6. Submit the form

