# Accessibility Process

The ILIAS community aims to provide a system that is usable for everyone, including
users with special needs. This document clarifies how we want to move our software
towards this goal incrementally, who is involved, which tools the community uses and
how different activities are incorporated in our release cycle.

**Table of Contents**
* [Goals](#Goals)
* [Participants](#Participants)
* [Tools](#Tools)
* [Activities in Release Cycle](#Activities in Release Cycle)

## Goals

While the general goal is to provide a system that is usable to for everyone, that
goal needs to be elaborated to some more concrete goals to become effective. These
concrete goals are:

* We want to identify targets for incremental improvements regularly, be it concrete
areas of the system itself or processes, tools and approaches used to work towards
a better accessibility of ILIAS.
* An [expert group](./expert-groups.md) for UI, UX and accessibility is appointed.
The group is a central point of contact for all questions related to ILIAS' user
interface and accessibility.
* External accessibility experts are consulted regularly to improve the general
compentence of the ILIAS community as well as identify concrete problems or provide
concrete solutions.
* Effective and efficient tools are provided to the community that help to meet the
targets and goals that are set in this document and in the accessibilty guidelines.
* Regularly test components of ILIAS to make sure that there is no regression in
accessibility properties of the system.
* Improve general knowledge and awareness for accessibility in the ILIAS community.
* Evaluate this process regularly, improve it according to new insights and adapt
it to new situations.


## Participants

To achieve these goals, various people need to participate in different roles during
the release cycle. This section should help to clarify the expectations towards these
participants. Roles central to the process are listed first.

* UI/UX/A11y expert group:
    * supports maintainers and developers on general and specific questions regarding
      feature requests, issue tickets and implementations
    * works on processes and strategies to improve processes
    * sends members to the SIG Accessibility and takes part in the discussions there
    * works with UI-Coordinators to improve components and processes
    * analyses accessibility reports
    * reviews and improves test suites
    * provides feedback on feature requests before Jour Fixe.
    * take part in Jour Fixe to answers questions on issues and features
    * carries out annual review of this process 
    * answers queries to the accessibility mailing-list
    * is responsible for this document

* Maintainers and Developers
    * develop new components and features in accordance with accessibility guidelines
    * carries out the accessibility checklist on own projects and reviews own code
      with focus on accessibility
    * builds sound understanding of accessibility
    * get in contact with expert group to get better understanding of accessibility
      issues or guidelines

* UI-Coordinators
    * triages objectively testable accessibility bugs for UI components
    * checks if formal requirements are met and code is at the correct locus
    * builds sound understanding of accessibility
    * contact expert group to get better understanding of accessibility issues or
      guidelines

* Community Tester for Accessibility 
    * carries out test cases of accessibility test suite in beta phase 
    * uses of simple diagnostical browser extensions like WAVE or Lighthouse to
      automate a part of testing
    * provides feedback on quality and coverage of accessibility test suite to the
      Test Case Author for Accessibility 
    * analyses External Beta Accessibility Assessment Reports. Prepares bugs based
      on report
    * has sound understanding of accessibility and can be consults by developers on
      bugs

* Test Case Author for Accessibility
    * prepares, organises and writes test cases of the Accessibility Test Suite
    * Supports Community Tester for Accessibility, improves cases upon feedback
      from Community Tester or Developer
    * Analyses Accessibility Assessment Reports. Reviews Test Suite in the light
      of said report and makes changes accordingly. Supports Community in preparing
      bugs based on Accessibility Assessment Reports
    * Has sound understanding of accessibility and can be consulted by developers
      on bugs.
    * Works in close coordination with/or is member of the UI/UX/A11y expert group.

* Chair SIG Accessibility
    * Role requirements are described in [Rules of Procedure](https://docu.ilias.de/goto_docu_cat_3773.html)
      for Special Interest Groups.
    * advocates accessibility to community i.e. ensures reports are prepared on
      DevConfs.
    * organizes or initiates or delegates the fundraising

* Accessibility Contractor
    * Is contracted to perform audits and run accessibility trainings for developers
      and community members.
    * is contracted to advise and consults on major UI Developments
    * Accessibility contractors should be tendered and selected from BITV-Test-
      Prüfverband or similar.

* Managing Director of ILIAS society
    * Contracts external Beta Accessibility Assessment with dedicated agency.

* Product Manager
    * Ensures accessibility is aptly considered in feature requests in Jour Fixe

* Technical Board
    * appoints UI/UX/A11y expert group, makes sure that the group works as intended
      and takes the responsibility of that group, if the group does not function
      as intended
    * is responsible for the general form and direction of the accessibility process

* Community Test Manager
    * coordinates accessibility testing


## Tools

To support the work in the various stages of the release cycle the community
use different tools. This section clarifies the purpose and usage of these tools.

* [Guidelines](./accessibility.md)
    * The accessibility guidelines are based on the WCAG and put these guidelines
      in the context of ILIAS. The guidelines are supplemented with:
        * specific rules in KS entries which interpret guidelines for UI-elements
        * the Accessibility Checklist, that interprets guidelines to make them
          objectively testable wherever possible
    * We accept that there is ambivalence in the rules that are not objectively
      testable. We strive to shrink this ambivalence.
    * Accessibility guidelines are kept in synch with WCAG developments
    * Access Guidelines refer to resources on specific accessibility issues for
      all consumers to look up and self-educate

* [Accessibility Checklist](./accessibility.md#Checklist)
    * The Accessibility Checklist is documented as md-file along with the
      accessibility guidelines.
    * Maintainers and Developers use the Accessibility Checklist to assess
      accessibility of their ongoing implementation projects.


* [Feature Wiki](https://docu.ilias.de/goto_docu_wiki_wpage_1_1357.html)
    * For Feature Requests a dedicated section "Accessibility" is to be filled
      out by the maintainer - very much like "Privacy".
    * The Maintainer has to state if the feature implements a behaviour that is
      neither covered by an existing UI-Component nor complies with the accessibility
      guideline. If this is the case maintainer has to consult with the UI/UX/A11y
      expert group. The UI/UX/A11y expert group then provides risk analysis of
      features in the Feature Wiki and recommends an accessible approach. If the
      maintainer is unsure about the accessibility issues of a feature, the
      maintainer may turn to Accessibility Mailing List.
    * The "Accessibility" section is to be completed before the article can be
      finally decided by Jour Fixe.

* [Testrail](https://testrail.ilias.de)
    * A [test suite dedicated to Accessibility](https://testrail.ilias.de/index.php?/runs/view/566&group_by=cases:section_id&group_order=asc)
      is available.
    * Test cases are well groomed, easy to carry out and understand.
    * Test cases refer to resource on specific accessibility issues for all
      consumers to look up and self-educate
    * Test Cases are provided that use simple diagnostical browser extensions like
      lighthouse, HTML Validator or Wave browser extension.
    * All KS-Entries are tested for the prioritized issues and using automatic
      tools.

* Development Tools
    * Detects issues very early on and drives home the importance of accessibility
      during development.
    * Reports are prepared with Continuous Integration and reported to Jour Fixe.
    * All developers are encouraged to make use of simple diagnostical browser
      extensions like lighthouse, HTML Validator or Wave browser extension

* [Issue Tracker](https://mantis.ilias.de)
    * Issues can be reported on automatically testable violations of guidelines.
    * Issues can be reported on violations of accessibility rules listed in a KS
      entry, but also the on the rules themselves if they need improvement.
      The KS entry and implementation are amended via the normal KS process.
    * Issues can be reported against soft / non-objective parts of the accessibility
      guidelines. These require discussion and decisions. Accessibility Guidelines
      are to be amended or clarified to become more objective. Tickets of this kind
      are assigned to the UI/UX/A11y expert group.

* [Jour Fixe](https://docu.ilias.de/goto.php?target=wiki_1357_Jour_Fixe_Agendas)
    * Maintainers can put forward their Accessibility issues that came up during
      implementation as "Development Issues".
    * Can be contacted for resolving discussions/deciding on issues among different stakeholders on A11y questions.      

* [UI Components](../..//src/UI/README.md)
    * Lists UI Components of ILIAS along with a purpose description an A11y on specific UI Components.
    * Can be used to lookup of the mechanism of specific parts of the UI.

* Accessibility Mailing List
    * First POC for Maintainers
    * Maintainers, writers of Feature wiki articles can turn themselves to Acessibility
      Mailing List to get their issues looked at.
    * The mailing list is managed by the UI/UX/A11y expert group

## Activities in Release Cycle
To above goals are not achievable in a single step. They need to be tackled continuously in an iterative process aiming to push 
closer towards achieving those goals with each iteration. This section shows how we understand our release cycle as one
iteration in the process of enhancing A11y in ILIAS. The main responsibility for following those steps listed in this 
cycle resides by the Technical Board supported by the SIG A11y and the A11y expert group.

### Contracted External Beta Accessibility Assessment - November
* Early in Beta phase a formative Accessibility Assessment is carried out by a registered auditor.
* Those audits have the main goal of evaluate the A11y of a aspect of ILIAS (e.g. new Features, status of
  a given service module or component or guidelines).
* Those audits provide feedback on the quality of the tested aspect. 
* Note, certification of any kind or generating lists for issue trackers are NOT goals of that assessment.
* The Product Manager signs the contract with the registered auditor. The SIG may help in providing the funding.
* ILIAS society provides test installation.

### Huge Project Identification Jour Fixe / Yearly Project
* During the Huge Project Identification Meeting we try to identify large UI heavy components to make sure accessibility 
issues are addressed early and continuously. 
* Huge UI heavy components may choose to contract external accessibility testing before merging.

### After-Action Review Accessibility - March
* After the release the A11y expert group organizes an After-Action Review.
* Yearly meeting open to all community members.
* After publishing the stable release, the former season is analysed with respect to accessibility.
* Draws up plan for upcoming season.
* The Main Question is, how well did our current process and guidelines hold water during this release?
* Maintains and reviews accessibility guidelines according to on new guidelines from the WCAG or other major developments outside the ILIAS Community.
* Triggers Test Case Author to adopt Test Suite.
* Reviews processes and roles that manage accessibility

### Feature Freeze - April
* Features for Accessibility Improvements are to be handed in on time.
* Features for Accessibility Improvements may be derived from the After-Action Review.

### Feature Development 
* Feature must adhere to accessibility guidelines
* Maintainers carry out Accessibility Checklist (Todo, provide Link) during implementation

### Community Testing - November
* In Beta Phase the new release is specifically tested with regard to accessibility. 