# Coordinator Model

## Table of Contents

<!-- MarkdownTOC depth=0 autolink="true" bracket="round" autoanchor="true" style="ordered" indent="   " -->
1. [Role of the Maintainer](#role-of-the-maintainer)
1. [Change Management](#change-management)
1. [Issue Management](#issue-management)
1. [Scenarios](#scenarios)
1. [What can be expected of a coordinator?](#expectations)


<!-- /MarkdownTOC -->
<a name="role-of-the-maintainer"></a>
## Role of the Maintainer

Each component ([Module](../../Modules), [Service](../../Service), [Library](../../src)
and some special cases as language-files) is either maintained by a maintainer
or collectively maintained within the [Coordinator Model](maintenance-coordinator.md).

New developers are welcome to the project, but the system has reached a certain
complexity in code as well as in features that could be hard to grasp for newcomers.
Even if we try to document our system better and simplify where possible, we still
need to guarantee the sustainability and quality of our development process.

Maintainers take this responsibility for their specific component. Besides the
maintenance they assure proper communication among developers that are working
on the component.

The Maintainer is understood to be the owner of a component and are basically the
only ones that are permitted to make changes in a component. Decisions about
features in the component are made together with the product manager on the JF.
This implies that mostly the maintainer is the only possible contractor for work
on a component that should be included in the official ILIAS-core. The maintainer
may delegate the permission to make changes to other developers at their own
discretion for specific parts of their component or even for the complete component.

The PM and the TB appoint or replace maintainers. The maintainer role belongs to
a person, not a company. Since the role builds on social capital in the community
and a vision of the component, it will be near impossible to leave that role at
a company when moving on.

It is encouraged that maintainers appoint second or even third maintainers for
their respective components and introduce them to the inner workings of the
component to enhance the component's [Bus factor](https://en.wikipedia.org/wiki/Bus_factor).


<a name="change-management"></a>
## Change Management
Changes of features of the component (be it introduction of a new feature,
changes in or removal of an existing feature) are decided upon by the maintainer
of a component together with the product manager on the Jour Fixe, according
to the process to handle [feature requests](http://www.ilias.de/docu/goto.php?target=wiki_5307&client_id=docu#ilPageTocA119).

Changes in the code of a component are privilege of the maintainer, which might
be delegated to other developers. Proposals for bugfixes or improvements of some
component can be handed by contributors according to the [guidelines for contributions](contributing.md)
and are recognized by responsible maintainers.

<a name="issue-management"></a>
## Issue Management
Issues with components are handed in a the [Issue-Tracker](http://mantis.ilias.de).
They are assigned to the responsible maintainer automatically and are handled
according to the [bug fixing process](https://docu.ilias.de/goto_docu_file_4566_download.html).

<a name="scenarios"></a>
## Scenarios

TBD

<a name="expectations"></a>
## What can be expected of a maintainer?
* Component maintainers MUST assure maintenance of their component for at least
three year which is approximately three ILIAS major releases.
* Component maintainers MUST agree to coordinate the development of their component
with the product manager. The decisions on new features or the removal of existing
features MUST be made by the responsible first maintainer and the product manager
on the Jour Fixe after an open discussion.
* Component maintainers SHOULD fix bugs in components they are responsible for.
Tickets related to their component are automatically assigned by the [Issue-Tracker](http://mantis.ilias.de).
* Component maintainers MUST handle PRs according to our [contribution guidelines](contributing.md#rules-for-maintainers-assigned-to-prs).

TBD

**Please note:** The key words "MUST", "MUST NOT", "REQUIRED", "SHALL", "SHALL
NOT", "SHOULD", "SHOULD NOT", "RECOMMENDED",  "MAY", and  "OPTIONAL"  in this
document are to be interpreted as described in [RFC 2119](https://www.ietf.org/rfc/rfc2119.txt).

# Listing of Maintainers

<!-- REMOVE -->
* **ActiveRecord**
	* 1st Maintainer: [fschmid](http://www.ilias.de/docu/goto_docu_usr_21087.html)
	* 2nd Maintainer: MISSING
	* Testcases: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)
	* Tester: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)

* **Administration**
	* 1st Maintainer: [akill](http://www.ilias.de/docu/goto_docu_usr_149.html)
	* 2nd Maintainer: [smeyer](http://www.ilias.de/docu/goto_docu_usr_191.html)
	* Testcases: [kunkel](http://www.ilias.de/docu/goto_docu_usr_115.html)
	* Tester: [kunkel](http://www.ilias.de/docu/goto_docu_usr_115.html)

* **BackgroundTasks**
	* 1st Maintainer: [fschmid](http://www.ilias.de/docu/goto_docu_usr_21087.html)
	* 2nd Maintainer: MISSING
	* Testcases: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)
	* Tester: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)

* **Badges**
	* 1st Maintainer: [akill](http://www.ilias.de/docu/goto_docu_usr_149.html)
	* 2nd Maintainer: MISSING
	* Testcases: [atoedt](http://www.ilias.de/docu/goto_docu_usr_3139.html)
	* Tester: [Thomas.schroeder](http://www.ilias.de/docu/goto_docu_usr_38330.html)

* **Bibliographic List Item**
	* 1st Maintainer: [fschmid](http://www.ilias.de/docu/goto_docu_usr_21087.html)
	* 2nd Maintainer: MISSING
	* Testcases: [mstuder](http://www.ilias.de/docu/goto_docu_usr_8473.html)
	* Tester: [miriamhoelscher](http://www.ilias.de/docu/goto_docu_usr_25370.html)

* **Blog**
	* 1st Maintainer: [akill](http://www.ilias.de/docu/goto_docu_usr_149.html)
	* 2nd Maintainer: MISSING
	* Testcases: [KlausVorkauf](http://www.ilias.de/docu/goto_docu_usr_5890.html)
	* Tester: [PaBer](http://www.ilias.de/docu/goto_docu_usr_33766.html)

* **Booking Tool**
	* 1st Maintainer: [akill](http://www.ilias.de/docu/goto_docu_usr_149.html)
	* 2nd Maintainer: MISSING
	* Testcases: [e.coroian](http://www.ilias.de/docu/goto_docu_usr_37215.html)
	* Tester: [wolfganghuebsch](http://www.ilias.de/docu/goto_docu_usr_18455.html)

* **Bookmarks**
	* 1st Maintainer: [akill](http://www.ilias.de/docu/goto_docu_usr_149.html)
	* 2nd Maintainer: MISSING
	* Testcases: [kunkel](http://www.ilias.de/docu/goto_docu_usr_115.html)
	* Tester: [miriamhoelscher](http://www.ilias.de/docu/goto_docu_usr_25370.html)

* **CSS / Templates**
	* 1st Maintainer: [braun](http://www.ilias.de/docu/goto_docu_usr_27123.html)
	* 2nd Maintainer: [amstutz](http://www.ilias.de/docu/goto_docu_usr_26468.html)
	* Testcases: [Fabian](http://www.ilias.de/docu/goto_docu_usr_27631.html)
	* Tester: [fschmid](http://www.ilias.de/docu/goto_docu_usr_21087.html)

* **Calendar**
	* 1st Maintainer: [smeyer](http://www.ilias.de/docu/goto_docu_usr_191.html)
	* 2nd Maintainer: [akill](http://www.ilias.de/docu/goto_docu_usr_149.html)
	* Testcases: iLUB Universität Bern
	* Tester: iLUB Universität Bern

* **Category and Repository**
	* 1st Maintainer: [akill](http://www.ilias.de/docu/goto_docu_usr_149.html)
	* 2nd Maintainer: [smeyer](http://www.ilias.de/docu/goto_docu_usr_191.html)
	* Testcases: [kunkel](http://www.ilias.de/docu/goto_docu_usr_115.html)
	* Tester: [miriamhoelscher](http://www.ilias.de/docu/goto_docu_usr_25370.html)

* **Certificate**
	* 1st Maintainer: [mjansen](http://www.ilias.de/docu/goto_docu_usr_8784.html)
	* 2nd Maintainer: MISSING
	* Testcases: [christian.hueser](http://www.ilias.de/docu/goto_docu_usr_41129.html)
	* Tester: [christian.hueser](http://www.ilias.de/docu/goto_docu_usr_41129.html)

* **Chat**
	* 1st Maintainer: [mjansen](http://www.ilias.de/docu/goto_docu_usr_8784.html)
	* 2nd Maintainer: [mbecker](http://www.ilias.de/docu/goto_docu_usr_27266.html)
	* Testcases: [kunkel](http://www.ilias.de/docu/goto_docu_usr_115.html)
	* Tester: [elenak](http://www.ilias.de/docu/goto_docu_usr_49160.html)

* **Cloud Object**
	* 1st Maintainer: [ttruffer](http://www.ilias.de/docu/goto_docu_usr_42894.html)
	* 2nd Maintainer: [amstutz](http://www.ilias.de/docu/goto_docu_usr_26468.html)
	* Testcases: [ttruffer](http://www.ilias.de/docu/goto_docu_usr_42894.html)
	* Tester: [fschmid](http://www.ilias.de/docu/goto_docu_usr_21087.html)

* **Competence Management**
	* 1st Maintainer: [akill](http://www.ilias.de/docu/goto_docu_usr_149.html)
	* 2nd Maintainer: MISSING
	* Testcases: [atoedt](http://www.ilias.de/docu/goto_docu_usr_3139.html)
	* Tester: [wolfganghuebsch](http://www.ilias.de/docu/goto_docu_usr_18455.html)

* **Contacts**
	* 1st Maintainer: [mjansen](http://www.ilias.de/docu/goto_docu_usr_8784.html)
	* 2nd Maintainer: MISSING
	* Testcases: [suittenpointner](http://www.ilias.de/docu/goto_docu_usr_3458.html)
	* Tester: [abaulig1](http://www.ilias.de/docu/goto_docu_usr_44386.html)

* **ContentPage**
	* 1st Maintainer: [mjansen](http://www.ilias.de/docu/goto_docu_usr_8784.html)
	* 2nd Maintainer: MISSING
	* Testcases: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)
	* Tester: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)

* **Course Management**
	* 1st Maintainer: [smeyer](http://www.ilias.de/docu/goto_docu_usr_191.html)
	* 2nd Maintainer: [akill](http://www.ilias.de/docu/goto_docu_usr_149.html)
	* Testcases: iLUB Universität Bern
	* Tester: iLUB Universität Bern

* **Cron Service**
	* 1st Maintainer: [mjansen](http://www.ilias.de/docu/goto_docu_usr_8784.html)
	* 2nd Maintainer: [bheyser](http://www.ilias.de/docu/goto_docu_usr_14300.html)
	* Testcases: [kunkel](http://www.ilias.de/docu/goto_docu_usr_115.html)
	* Tester: [kunkel](http://www.ilias.de/docu/goto_docu_usr_115.html)

* **Data**
	* 1st Maintainer: [rklees](http://www.ilias.de/docu/goto_docu_usr_34047.html)
	* 2nd Maintainer: MISSING
	* Testcases: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)
	* Tester: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)

* **Data Collection**
	* 1st Maintainer: [ttruffer](http://www.ilias.de/docu/goto_docu_usr_42894.html)
	* 2nd Maintainer: MISSING
	* Testcases: [mstuder](http://www.ilias.de/docu/goto_docu_usr_8473.html)
	* Tester: [kim.herms](http://www.ilias.de/docu/goto_docu_usr_28720.html)

* **Database**
	* 1st Maintainer: [fschmid](http://www.ilias.de/docu/goto_docu_usr_21087.html)
	* 2nd Maintainer: [smeyer](http://www.ilias.de/docu/goto_docu_usr_191.html)
	* Testcases: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)
	* Tester: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)

* **Didactic Templates**
	* 1st Maintainer: [smeyer](http://www.ilias.de/docu/goto_docu_usr_191.html)
	* 2nd Maintainer: MISSING
	* Testcases: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)
	* Tester: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)

* **ECS Interface**
	* 1st Maintainer: [smeyer](http://www.ilias.de/docu/goto_docu_usr_191.html)
	* 2nd Maintainer: MISSING
	* Testcases: Christian Bogen and Kristina Haase
	* Tester: [bogen](http://www.ilias.de/docu/goto_docu_usr_13815.html)

* **Exercise**
	* 1st Maintainer: [akill](http://www.ilias.de/docu/goto_docu_usr_149.html)
	* 2nd Maintainer: MISSING
	* Testcases: [atoedt](http://www.ilias.de/docu/goto_docu_usr_3139.html)
	* Tester: [miriamwegener](http://www.ilias.de/docu/goto_docu_usr_23051.html)

* **Export**
	* 1st Maintainer: [smeyer](http://www.ilias.de/docu/goto_docu_usr_191.html)
	* 2nd Maintainer: MISSING
	* Testcases: [Fabian](http://www.ilias.de/docu/goto_docu_usr_27631.html)
	* Tester: [Fabian](http://www.ilias.de/docu/goto_docu_usr_27631.html)

* **File**
	* 1st Maintainer: [fschmid](http://www.ilias.de/docu/goto_docu_usr_21087.html)
	* 2nd Maintainer: [akill](http://www.ilias.de/docu/goto_docu_usr_149.html)
	* Testcases: [daniwe4](http://www.ilias.de/docu/goto_docu_usr_54500.html)
	* Tester: [daniwe4](http://www.ilias.de/docu/goto_docu_usr_54500.html)

* **Forum**
	* 1st Maintainer: [mjansen](http://www.ilias.de/docu/goto_docu_usr_8784.html)
	* 2nd Maintainer: [nadia](http://www.ilias.de/docu/goto_docu_usr_14206.html)
	* Testcases: FH Aachen
	* Tester: [e.coroian](http://www.ilias.de/docu/goto_docu_usr_37215.html)

* **General Kiosk-Mode**
	* 1st Maintainer: [rklees](http://www.ilias.de/docu/goto_docu_usr_34047.html)
	* 2nd Maintainer: MISSING
	* Testcases: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)
	* Tester: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)

* **GlobalCache**
	* 1st Maintainer: [fschmid](http://www.ilias.de/docu/goto_docu_usr_21087.html)
	* 2nd Maintainer: MISSING
	* Testcases: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)
	* Tester: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)

* **GlobalScreen**
	* 1st Maintainer: [fschmid](http://www.ilias.de/docu/goto_docu_usr_21087.html)
	* 2nd Maintainer: MISSING
	* Testcases: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)
	* Tester: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)

* **Glossary**
	* 1st Maintainer: [akill](http://www.ilias.de/docu/goto_docu_usr_149.html)
	* 2nd Maintainer: MISSING
	* Testcases: [atoedt](http://www.ilias.de/docu/goto_docu_usr_3139.html)
	* Tester: [atoedt](http://www.ilias.de/docu/goto_docu_usr_3139.html)

* **Group**
	* 1st Maintainer: [smeyer](http://www.ilias.de/docu/goto_docu_usr_191.html)
	* 2nd Maintainer: [akill](http://www.ilias.de/docu/goto_docu_usr_149.html)
	* Testcases: iLUB Universität Bern
	* Tester: iLUB Universität Bern

* **HTTP-Request**
	* 1st Maintainer: [fschmid](http://www.ilias.de/docu/goto_docu_usr_21087.html)
	* 2nd Maintainer: MISSING
	* Testcases: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)
	* Tester: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)

* **ILIAS Page Editor**
	* 1st Maintainer: [akill](http://www.ilias.de/docu/goto_docu_usr_149.html)
	* 2nd Maintainer: MISSING
	* Testcases: [atoedt](http://www.ilias.de/docu/goto_docu_usr_3139.html)
	* Tester: FH Aachen

* **IndividualAssessment**
	* 1st Maintainer: [rklees](http://www.ilias.de/docu/goto_docu_usr_34047.html)
	* 2nd Maintainer: [dkloepfer](http://www.ilias.de/docu/goto_docu_usr_42712.html)
	* Testcases: [rklees](http://www.ilias.de/docu/goto_docu_usr_34047.html)
	* Tester: [kunkel](http://www.ilias.de/docu/goto_docu_usr_115.html)

* **Info Page**
	* 1st Maintainer: [akill](http://www.ilias.de/docu/goto_docu_usr_149.html)
	* 2nd Maintainer: [smeyer](http://www.ilias.de/docu/goto_docu_usr_191.html)
	* Testcases: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)
	* Tester: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)

* **ItemGroup**
	* 1st Maintainer: [akill](http://www.ilias.de/docu/goto_docu_usr_149.html)
	* 2nd Maintainer: MISSING
	* Testcases: [berggold](http://www.ilias.de/docu/goto_docu_usr_22199.html)
	* Tester: [berggold](http://www.ilias.de/docu/goto_docu_usr_22199.html)

* **LTI**
	* 1st Maintainer: [ukohnle](http://www.ilias.de/docu/goto_docu_usr_21855.html)
	* 2nd Maintainer: [smeyer](http://www.ilias.de/docu/goto_docu_usr_191.html)
	* Testcases: [atoedt](http://www.ilias.de/docu/goto_docu_usr_3139.html)
	* Tester: [atoedt](http://www.ilias.de/docu/goto_docu_usr_3139.html)

* **Language Handling**
	* 1st Maintainer: [kunkel](http://www.ilias.de/docu/goto_docu_usr_115.html)
	* 2nd Maintainer: [fneumann](http://www.ilias.de/docu/goto_docu_usr_1560.html)
	* Testcases: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)
	* Tester: [kunkel](http://www.ilias.de/docu/goto_docu_usr_115.html)

* **Learning History**
	* 1st Maintainer: [akill](http://www.ilias.de/docu/goto_docu_usr_149.html)
	* 2nd Maintainer: MISSING
	* Testcases: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)
	* Tester: [oliver.samoila](http://www.ilias.de/docu/goto_docu_usr_26160.html)

* **Learning Module HTML**
	* 1st Maintainer: [akill](http://www.ilias.de/docu/goto_docu_usr_149.html)
	* 2nd Maintainer: MISSING
	* Testcases: [suittenpointner](http://www.ilias.de/docu/goto_docu_usr_3458.html)
	* Tester: [suittenpointner](http://www.ilias.de/docu/goto_docu_usr_3458.html)

* **Learning Module ILIAS**
	* 1st Maintainer: [akill](http://www.ilias.de/docu/goto_docu_usr_149.html)
	* 2nd Maintainer: MISSING
	* Testcases: [Balliel](http://www.ilias.de/docu/goto_docu_usr_18365.html)
	* Tester: [Balliel](http://www.ilias.de/docu/goto_docu_usr_18365.html)

* **Learning Module SCORM**
	* 1st Maintainer: [ukohnle](http://www.ilias.de/docu/goto_docu_usr_21855.html)
	* 2nd Maintainer: MISSING
	* Testcases: [suittenpointner](http://www.ilias.de/docu/goto_docu_usr_3458.html)
	* Tester: [suittenpointner](http://www.ilias.de/docu/goto_docu_usr_3458.html)

* **Learning Sequence**
	* 1st Maintainer: [rklees](http://www.ilias.de/docu/goto_docu_usr_34047.html)
	* 2nd Maintainer: MISSING
	* Testcases: [scarlino](http://www.ilias.de/docu/goto_docu_usr_56074.html)
	* Tester: [mglaubitz](http://www.ilias.de/docu/goto_docu_usr_28309.html)

* **Logging**
	* 1st Maintainer: [smeyer](http://www.ilias.de/docu/goto_docu_usr_191.html)
	* 2nd Maintainer: MISSING
	* Testcases: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)
	* Tester: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)

* **Login, Auth & Registration**
	* 1st Maintainer: [smeyer](http://www.ilias.de/docu/goto_docu_usr_191.html)
	* 2nd Maintainer: [bheyser](http://www.ilias.de/docu/goto_docu_usr_14300.html)
	* Testcases: FH Aachen
	* Tester: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)

* **Mail**
	* 1st Maintainer: [mjansen](http://www.ilias.de/docu/goto_docu_usr_8784.html)
	* 2nd Maintainer: [nadia](http://www.ilias.de/docu/goto_docu_usr_14206.html)
	* Testcases: [amersch](http://www.ilias.de/docu/goto_docu_usr_15114.html)
	* Tester: [amersch](http://www.ilias.de/docu/goto_docu_usr_15114.html)

* **MainMenu**
	* 1st Maintainer: [fschmid](http://www.ilias.de/docu/goto_docu_usr_21087.html)
	* 2nd Maintainer: MISSING
	* Testcases: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)
	* Tester: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)

* **Maps**
	* 1st Maintainer: [rklees](http://www.ilias.de/docu/goto_docu_usr_34047.html)
	* 2nd Maintainer: [dkloepfer](http://www.ilias.de/docu/goto_docu_usr_42712.html)
	* Testcases: [rklees](http://www.ilias.de/docu/goto_docu_usr_34047.html)
	* Tester: [miriamhoelscher](http://www.ilias.de/docu/goto_docu_usr_25370.html)

* **MathJax**
	* 1st Maintainer: [fneumann](http://www.ilias.de/docu/goto_docu_usr_1560.html)
	* 2nd Maintainer: MISSING
	* Testcases: [fneumann](http://www.ilias.de/docu/goto_docu_usr_1560.html)
	* Tester: [claudio.fischer](http://www.ilias.de/docu/goto_docu_usr_41113.html)

* **Media Objects**
	* 1st Maintainer: [akill](http://www.ilias.de/docu/goto_docu_usr_149.html)
	* 2nd Maintainer: MISSING
	* Testcases: [kunkel](http://www.ilias.de/docu/goto_docu_usr_115.html)
	* Tester: [kunkel](http://www.ilias.de/docu/goto_docu_usr_115.html)

* **Media Pool**
	* 1st Maintainer: [akill](http://www.ilias.de/docu/goto_docu_usr_149.html)
	* 2nd Maintainer: MISSING
	* Testcases: [kunkel](http://www.ilias.de/docu/goto_docu_usr_115.html)
	* Tester: [kunkel](http://www.ilias.de/docu/goto_docu_usr_115.html)

* **MediaCast**
	* 1st Maintainer: [akill](http://www.ilias.de/docu/goto_docu_usr_149.html)
	* 2nd Maintainer: MISSING
	* Testcases: [berggold](http://www.ilias.de/docu/goto_docu_usr_22199.html)
	* Tester: [berggold](http://www.ilias.de/docu/goto_docu_usr_22199.html)

* **Membership**
	* 1st Maintainer: [smeyer](http://www.ilias.de/docu/goto_docu_usr_191.html)
	* 2nd Maintainer: MISSING
	* Testcases: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)
	* Tester: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)

* **Metadata**
	* 1st Maintainer: [smeyer](http://www.ilias.de/docu/goto_docu_usr_191.html)
	* 2nd Maintainer: MISSING
	* Testcases: [daniela.weber](http://www.ilias.de/docu/goto_docu_usr_40672.html)
	* Tester: [daniela.weber](http://www.ilias.de/docu/goto_docu_usr_40672.html)

* **My Workspace**
	* 1st Maintainer: [akill](http://www.ilias.de/docu/goto_docu_usr_149.html)
	* 2nd Maintainer: MISSING
	* Testcases: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)
	* Tester: [KlausVorkauf](http://www.ilias.de/docu/goto_docu_usr_5890.html)

* **News**
	* 1st Maintainer: [akill](http://www.ilias.de/docu/goto_docu_usr_149.html)
	* 2nd Maintainer: MISSING
	* Testcases: [Thomas.schroeder](http://www.ilias.de/docu/goto_docu_usr_38330.html)
	* Tester: [Thomas.schroeder](http://www.ilias.de/docu/goto_docu_usr_38330.html)

* **Notes and Comments**
	* 1st Maintainer: [akill](http://www.ilias.de/docu/goto_docu_usr_149.html)
	* 2nd Maintainer: MISSING
	* Testcases: [skaiser](http://www.ilias.de/docu/goto_docu_usr_17260.html)
	* Tester: [skaiser](http://www.ilias.de/docu/goto_docu_usr_17260.html)

* **Online Help**
	* 1st Maintainer: [smeyer](http://www.ilias.de/docu/goto_docu_usr_191.html)
	* 2nd Maintainer: [akill](http://www.ilias.de/docu/goto_docu_usr_149.html)
	* Testcases: [atoedt](http://www.ilias.de/docu/goto_docu_usr_3139.html)
	* Tester: [atoedt](http://www.ilias.de/docu/goto_docu_usr_3139.html)

* **Organisational Units**
	* 1st Maintainer: [mstuder](http://www.ilias.de/docu/goto_docu_usr_8473.html)
	* 2nd Maintainer: [bheyser](http://www.ilias.de/docu/goto_docu_usr_14300.html)
	* Testcases: [wischniak](http://www.ilias.de/docu/goto_docu_usr_21896.html)
	* Tester: [wischniak](http://www.ilias.de/docu/goto_docu_usr_21896.html)

* **Personal Desktop**
	* 1st Maintainer: [akill](http://www.ilias.de/docu/goto_docu_usr_149.html)
	* 2nd Maintainer: MISSING
	* Testcases: [kunkel](http://www.ilias.de/docu/goto_docu_usr_115.html)
	* Tester: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)

* **Personal Profile**
	* 1st Maintainer: [akill](http://www.ilias.de/docu/goto_docu_usr_149.html)
	* 2nd Maintainer: MISSING
	* Testcases: [Fabian](http://www.ilias.de/docu/goto_docu_usr_27631.html)
	* Tester: [Fabian](http://www.ilias.de/docu/goto_docu_usr_27631.html)

* **Plugin Slots**
	* 1st Maintainer: [mstuder](http://www.ilias.de/docu/goto_docu_usr_8473.html)
	* 2nd Maintainer: [rklees](http://www.ilias.de/docu/goto_docu_usr_34047.html)
	* Testcases: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)
	* Tester: Future Learning

* **Poll**
	* 1st Maintainer: [smeyer](http://www.ilias.de/docu/goto_docu_usr_191.html)
	* 2nd Maintainer: MISSING
	* Testcases: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)
	* Tester: Future Learning

* **Portfolio**
	* 1st Maintainer: [akill](http://www.ilias.de/docu/goto_docu_usr_149.html)
	* 2nd Maintainer: MISSING
	* Testcases: KlausVorkauf and Oliver Samoila (Portfolio Template)
	* Tester: KlausVorkauf and Oliver Samoila (Portfolio Template)

* **Precondition Handling**
	* 1st Maintainer: [smeyer](http://www.ilias.de/docu/goto_docu_usr_191.html)
	* 2nd Maintainer: MISSING
	* Testcases: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)
	* Tester: [mkloes](http://www.ilias.de/docu/goto_docu_usr_22174.html)

* **RBAC**
	* 1st Maintainer: [smeyer](http://www.ilias.de/docu/goto_docu_usr_191.html)
	* 2nd Maintainer: MISSING
	* Testcases: [kunkel](http://www.ilias.de/docu/goto_docu_usr_115.html)
	* Tester: [kunkel](http://www.ilias.de/docu/goto_docu_usr_115.html)

* **Rating**
	* 1st Maintainer: [akill](http://www.ilias.de/docu/goto_docu_usr_149.html)
	* 2nd Maintainer: MISSING
	* Testcases: [Fabian](http://www.ilias.de/docu/goto_docu_usr_27631.html)
	* Tester: [Fabian](http://www.ilias.de/docu/goto_docu_usr_27631.html)

* **SAML**
	* 1st Maintainer: [mjansen](http://www.ilias.de/docu/goto_docu_usr_8784.html)
	* 2nd Maintainer: MISSING
	* Testcases: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)
	* Tester: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)

* **SCORM Offline Player**
	* 1st Maintainer: [ukohnle](http://www.ilias.de/docu/goto_docu_usr_21855.html)
	* 2nd Maintainer: [sschneider](http://www.ilias.de/docu/goto_docu_usr_21741.html)
	* Testcases: [sschneider](http://www.ilias.de/docu/goto_docu_usr_21741.html)
	* Tester: [sschneider](http://www.ilias.de/docu/goto_docu_usr_21741.html)

* **SCORM Online Editor**
	* 1st Maintainer: [akill](http://www.ilias.de/docu/goto_docu_usr_149.html)
	* 2nd Maintainer: MISSING
	* Testcases: [atoedt](http://www.ilias.de/docu/goto_docu_usr_3139.html)
	* Tester: [Hester](http://www.ilias.de/docu/goto_docu_usr_31687.html)

* **SOAP**
	* 1st Maintainer: [smeyer](http://www.ilias.de/docu/goto_docu_usr_191.html)
	* 2nd Maintainer: [mjansen](http://www.ilias.de/docu/goto_docu_usr_8784.html)
	* Testcases: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)
	* Tester: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)

* **Search**
	* 1st Maintainer: [smeyer](http://www.ilias.de/docu/goto_docu_usr_191.html)
	* 2nd Maintainer: MISSING
	* Testcases: FH Aachen
	* Tester: Future Learning

* **Session**
	* 1st Maintainer: [smeyer](http://www.ilias.de/docu/goto_docu_usr_191.html)
	* 2nd Maintainer: MISSING
	* Testcases: iLUB Universität Bern
	* Tester: iLUB Universität Bern

* **Setup**
	* 1st Maintainer: [rklees](http://www.ilias.de/docu/goto_docu_usr_34047.html)
	* 2nd Maintainer: [smeyer](http://www.ilias.de/docu/goto_docu_usr_191.html)
	* Testcases: [kunkel](http://www.ilias.de/docu/goto_docu_usr_115.html)
	* Tester: [aarsenij](http://www.ilias.de/docu/goto_docu_usr_41159.html)

* **Shibboleth Authentication**
	* 1st Maintainer: [fschmid](http://www.ilias.de/docu/goto_docu_usr_21087.html)
	* 2nd Maintainer: MISSING
	* Testcases: iLUB Universität Bern
	* Tester: iLUB Universität Bern

* **Staff**
	* 1st Maintainer: [mstuder](http://www.ilias.de/docu/goto_docu_usr_8473.html)
	* 2nd Maintainer: [rklees](http://www.ilias.de/docu/goto_docu_usr_34047.html)
	* Testcases: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)
	* Tester: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)

* **Statistics and Learning Progress**
	* 1st Maintainer: [smeyer](http://www.ilias.de/docu/goto_docu_usr_191.html)
	* 2nd Maintainer: MISSING
	* Testcases: [bromberger](http://www.ilias.de/docu/goto_docu_usr_198.html)
	* Tester: [suittenpointner](http://www.ilias.de/docu/goto_docu_usr_3458.html)

* **Study Programme**
	* 1st Maintainer: [rklees](http://www.ilias.de/docu/goto_docu_usr_34047.html)
	* 2nd Maintainer: [shecken](http://www.ilias.de/docu/goto_docu_usr_45419.html)
	* Testcases: [rklees](http://www.ilias.de/docu/goto_docu_usr_34047.html)
	* Tester: [mstuder](http://www.ilias.de/docu/goto_docu_usr_8473.html)

* **Survey**
	* 1st Maintainer: [akill](http://www.ilias.de/docu/goto_docu_usr_149.html)
	* 2nd Maintainer: [Xus](http://www.ilias.de/docu/goto_docu_usr_50418.html)
	* Testcases: [atoedt](http://www.ilias.de/docu/goto_docu_usr_3139.html)
	* Tester: ILIAS open source e-Learning e.V.

* **System Check**
	* 1st Maintainer: [smeyer](http://www.ilias.de/docu/goto_docu_usr_191.html)
	* 2nd Maintainer: MISSING
	* Testcases: [kunkel](http://www.ilias.de/docu/goto_docu_usr_115.html)
	* Tester: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)

* **Tagging**
	* 1st Maintainer: [akill](http://www.ilias.de/docu/goto_docu_usr_149.html)
	* 2nd Maintainer: [mstuder](http://www.ilias.de/docu/goto_docu_usr_8473.html)
	* Testcases: [skaiser](http://www.ilias.de/docu/goto_docu_usr_17260.html)
	* Tester: [skaiser](http://www.ilias.de/docu/goto_docu_usr_17260.html)

* **Taxonomy**
	* 1st Maintainer: [akill](http://www.ilias.de/docu/goto_docu_usr_149.html)
	* 2nd Maintainer: MISSING
	* Testcases: Tested separately in each module that supports taxonomies
	* Tester: Tested separately in each module that supports taxonomies

* **Test & Assessment**
	* 1st Maintainer: [bheyser](http://www.ilias.de/docu/goto_docu_usr_14300.html)
	* 2nd Maintainer: [mbecker](http://www.ilias.de/docu/goto_docu_usr_27266.html)
	* Testcases: Stefanie Zepf and SIG EA
	* Tester: Claudia Dehling, SIG EA, et al.

* **Tree**
	* 1st Maintainer: [smeyer](http://www.ilias.de/docu/goto_docu_usr_191.html)
	* 2nd Maintainer: MISSING
	* Testcases: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)
	* Tester: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)

* **User Service**
	* 1st Maintainer: [smeyer](http://www.ilias.de/docu/goto_docu_usr_191.html)
	* 2nd Maintainer: [akill](http://www.ilias.de/docu/goto_docu_usr_149.html)
	* Testcases: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)
	* Tester: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)

* **Web Access Checker**
	* 1st Maintainer: [fschmid](http://www.ilias.de/docu/goto_docu_usr_21087.html)
	* 2nd Maintainer: [ukohnle](http://www.ilias.de/docu/goto_docu_usr_21855.html)
	* Testcases: [ttruffer](http://www.ilias.de/docu/goto_docu_usr_42894.html)
	* Tester: [berggold](http://www.ilias.de/docu/goto_docu_usr_22199.html)

* **Web Feed**
	* 1st Maintainer: [akill](http://www.ilias.de/docu/goto_docu_usr_149.html)
	* 2nd Maintainer: MISSING
	* Testcases: [kunkel](http://www.ilias.de/docu/goto_docu_usr_115.html)
	* Tester: [kunkel](http://www.ilias.de/docu/goto_docu_usr_115.html)

* **WebDAV**
	* 1st Maintainer: [fawinike](http://www.ilias.de/docu/goto_docu_usr_44474.html)
	* 2nd Maintainer: [rheer](http://www.ilias.de/docu/goto_docu_usr_47872.html)
	* Testcases: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)
	* Tester: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)

* **Weblink**
	* 1st Maintainer: [smeyer](http://www.ilias.de/docu/goto_docu_usr_191.html)
	* 2nd Maintainer: MISSING
	* Testcases: [nadine.bauser](http://www.ilias.de/docu/goto_docu_usr_34662.html)
	* Tester: [nadine.bauser](http://www.ilias.de/docu/goto_docu_usr_34662.html)

* **Webservices**
	* 1st Maintainer: [smeyer](http://www.ilias.de/docu/goto_docu_usr_191.html)
	* 2nd Maintainer: MISSING
	* Testcases: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)
	* Tester: [TESTERS MISSING](http://www.ilias.de/docu/goto_docu_pg_64423_4793.html)

* **Who is online?**
	* 1st Maintainer: [akill](http://www.ilias.de/docu/goto_docu_usr_149.html)
	* 2nd Maintainer: MISSING
	* Testcases: [atoedt](http://www.ilias.de/docu/goto_docu_usr_3139.html)
	* Tester: [amersch](http://www.ilias.de/docu/goto_docu_usr_15114.html)

* **Wiki**
	* 1st Maintainer: [akill](http://www.ilias.de/docu/goto_docu_usr_149.html)
	* 2nd Maintainer: MISSING
	* Testcases: [abaulig1](http://www.ilias.de/docu/goto_docu_usr_44386.html)
	* Tester: [abaulig1](http://www.ilias.de/docu/goto_docu_usr_44386.html)

* **Workflow Engine**
	* 1st Maintainer: [mbecker](http://www.ilias.de/docu/goto_docu_usr_27266.html)
	* 2nd Maintainer: MISSING
	* Testcases: [mbecker](http://www.ilias.de/docu/goto_docu_usr_27266.html)
	* Tester: [richtera](http://www.ilias.de/docu/goto_docu_usr_41247.html)


Components in the Coordinator Model [Coordinator Model](maintenance-coordinator.md):

* **UI-Service**
	* Coordinators: [amstutz](http://www.ilias.de/docu/goto_docu_usr_26468.html), [rklees](http://www.ilias.de/docu/goto_docu_usr_34047.html)
	* Used in Directories: src/UI


The following directories are currently maintained under the [Coordinator Model](maintenance-coordinator.md):

* src/UI


The following directories are currently unmaintained:

* Services/AssessmentQuestion
* Services/DiskQuota
* Services/Like
* Services/Membership
* Services/OpenIdConnect
* Services/PHPUnit
* Services/QTI
* Services/Randomization
