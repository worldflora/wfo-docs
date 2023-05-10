---
title: Integrity Checks
---

This will contain a list of integrity checks run against the data.

## Integrity Checks on Saving a Taxon

1. An accepted name must be set.
1. A parent taxon must be set (apart from the root of all taxa which has itself as its parent).
1. The accepted name for the taxon must pass the integrity checks necessary for it to be saved as a name (see above).
1. The accepted name must have the nomenclatural status 'valid'.
1. The accepted name must not be the accepted name of another taxon.
1. The basionym of the accepted name (or any other homotypic name) must not be the accepted name of another taxon.
1. If the accepted name is a synonym of another taxon then that synonym link will be broken - the name is moved.
1. If the basionym of the accepted name (or any other homotypic name) is a synonym of another taxon then that synonym link will be broken and the name moved to be a synonym of this taxon.
1. The rank of the accepted name must be an appropriate lower rank to that of the name of the parent (see ranks table below).
1. The siblings of the taxon within this parent must be at the same rank. If a rank in the hierarchy is skipped then the structure of the tree will be adjusted to use autonyms below the genus level placeholder taxa as described below.
1. For taxa at species rank and below the genus part of the name must agree with the name part of the genus above them in the hierarchy.
1. For taxa below species rank the species part of their names must agree with the name part of the species above them in the hierarchy.
1. For taxa at species rank and below the year in the name can't be great than the year in name of the genus taxon (if these are set).