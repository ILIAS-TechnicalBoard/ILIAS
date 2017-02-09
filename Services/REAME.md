Rules for the ./Services internal interface documentation 
=========================================================
* Each subdirectory under ./Services SHOULD contain a README.md file
* All internal interfaces provided by the service SHOULD be documented in the README.md file.
* Changes must be made via PR with a certain naming scheme (TBD).
* Process:
    - make PR and announce in JF
    - wait 8 Days after JF
    - everyone can veto via GitHub (TBD: How?)
    - if veto: escalation and decision by TB, process stops
    - if no veto: merge
* no breaking changes in release branches
* All changes to the described interfaces MUST decided by the JF.