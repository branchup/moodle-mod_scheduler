@mod @mod_scheduler
Feature: Teacher can select a release date
  In order to display slots from a certain date
  As a teacher
  I need to set an available from date

  Background:
    Given the following config values are set as admin:
      | timezone | UTC |
      | mod_scheduler/hideuntiltime | 3 |
    And the following "users" exist:
      | username | firstname | lastname | email |
      | teacher1 | Teacher | 1 | teacher1@example.com |
      | teacher2 | Teacher | 2 | teacher1@example.com |
      | teacher3 | Teacher | 3 | teacher1@example.com |
    And the following "courses" exist:
      | fullname | shortname | category |
      | Course 1 | C1 | 0 |
    And the following "course enrolments" exist:
      | user | course | role |
      | teacher1 | C1 | editingteacher |
      | teacher2 | C1 | editingteacher |
      | teacher3 | C1 | editingteacher |
    And the following "activities" exist:
      | activity  | name           | intro | course | idnumber   |
      | scheduler | Test scheduler | n     | C1     | scheduler1 |
    And I log in as "teacher1"
    And I open my profile in edit mode
    And I set the field "Timezone" to "UTC"
    And I press "Update profile"
    And I log in as "teacher2"
    And I open my profile in edit mode
    And I set the field "Timezone" to "Australia/Perth"
    And I press "Update profile"
    And I log in as "teacher3"
    And I open my profile in edit mode
    And I set the field "Timezone" to "America/Los_Angeles"
    And I press "Update profile"

  Scenario: Teacher sets a release date on a single slot
    When I am on the "scheduler1" Activity page logged in as teacher1
    And I click on "Add slots" "link"
    And I follow "Add single slot"
    And I set the following fields to these values:
      | starttime[day]    | 1        |
      | starttime[month]  | February |
      | starttime[year]   | 2050     |
      | starttime[hour]   | 10       |
      | starttime[minute] | 0        |
      | duration          | 30       |
      | hideuntil[day]    | 15       |
      | hideuntil[month]  | January  |
      | hideuntil[year]   | 2050     |
    And I click on "Save changes" "button"
    And I should see "1 slot added"
    And I click on "Edit" "link" in the "10:00 AM" "table_row"
    Then the following fields match these values:
      | hideuntil[day]    | 15       |
      | hideuntil[month]  | January  |
      | hideuntil[year]   | 2050     |

    And I am on the "scheduler1" Activity page logged in as teacher2
    And I click on "Edit" "link" in the "6:00 PM" "table_row"
    And the following fields match these values:
      | hideuntil[day]    | 16       |
      | hideuntil[month]  | January  |
      | hideuntil[year]   | 2050     |
    And I click on "Save changes" "button"
    And I click on "Edit" "link" in the "6:00 PM" "table_row"
    And the following fields match these values:
      | hideuntil[day]    | 16       |
      | hideuntil[month]  | January  |
      | hideuntil[year]   | 2050     |

    And I am on the "scheduler1" Activity page logged in as teacher1
    And I click on "Edit" "link" in the "10:00 AM" "table_row"
    Then the following fields match these values:
      | hideuntil[day]    | 15       |
      | hideuntil[month]  | January  |
      | hideuntil[year]   | 2050     |

    And I am on the "scheduler1" Activity page logged in as teacher3
    And I click on "Edit" "link" in the "2:00 AM" "table_row"
    And the following fields match these values:
      | hideuntil[day]    | 15       |
      | hideuntil[month]  | January  |
      | hideuntil[year]   | 2050     |
    And I click on "Save changes" "button"
    And I click on "Edit" "link" in the "2:00 AM" "table_row"
    And the following fields match these values:
      | hideuntil[day]    | 15       |
      | hideuntil[month]  | January  |
      | hideuntil[year]   | 2050     |

    And I am on the "scheduler1" Activity page logged in as teacher1
    And I click on "Edit" "link" in the "10:00 AM" "table_row"
    Then the following fields match these values:
      | hideuntil[day]    | 15       |
      | hideuntil[month]  | January  |
      | hideuntil[year]   | 2050     |

  Scenario: Teacher sets a release date with a time zone ahead
    When I am on the "scheduler1" Activity page logged in as teacher2
    And I click on "Add slots" "link"
    And I follow "Add single slot"
    And I set the following fields to these values:
      | starttime[day]    | 1        |
      | starttime[month]  | February |
      | starttime[year]   | 2050     |
      | starttime[hour]   | 10       |
      | starttime[minute] | 0        |
      | duration          | 30       |
      | hideuntil[day]    | 15       |
      | hideuntil[month]  | January  |
      | hideuntil[year]   | 2050     |
    And I click on "Save changes" "button"
    And I should see "1 slot added"
    And I click on "Edit" "link" in the "10:00 AM" "table_row"
    Then the following fields match these values:
      | hideuntil[day]    | 15       |
      | hideuntil[month]  | January  |
      | hideuntil[year]   | 2050     |
    And I am on the "scheduler1" Activity page logged in as teacher1
    And I click on "Edit" "link" in the "2:00 AM" "table_row"
    And the following fields match these values:
      | hideuntil[day]    | 14       |
      | hideuntil[month]  | January  |
      | hideuntil[year]   | 2050     |
    And I am on the "scheduler1" Activity page logged in as teacher3
    And I click on "Edit" "link" in the "6:00 PM" "table_row"
    And the following fields match these values:
      | hideuntil[day]    | 14       |
      | hideuntil[month]  | January  |
      | hideuntil[year]   | 2050     |

  Scenario: Teacher sets a release date with a time zone behind
    When I am on the "scheduler1" Activity page logged in as teacher3
    And I click on "Add slots" "link"
    And I follow "Add single slot"
    And I set the following fields to these values:
      | starttime[day]    | 1        |
      | starttime[month]  | February |
      | starttime[year]   | 2050     |
      | starttime[hour]   | 10       |
      | starttime[minute] | 0        |
      | duration          | 30       |
      | hideuntil[day]    | 15       |
      | hideuntil[month]  | January  |
      | hideuntil[year]   | 2050     |
    And I click on "Save changes" "button"
    And I should see "1 slot added"
    And I click on "Edit" "link" in the "10:00 AM" "table_row"
    Then the following fields match these values:
      | hideuntil[day]    | 15       |
      | hideuntil[month]  | January  |
      | hideuntil[year]   | 2050     |
    And I am on the "scheduler1" Activity page logged in as teacher1
    And I click on "Edit" "link" in the "6:00 PM" "table_row"
    And the following fields match these values:
      | hideuntil[day]    | 15       |
      | hideuntil[month]  | January  |
      | hideuntil[year]   | 2050     |
    And I am on the "scheduler1" Activity page logged in as teacher2
    And I click on "Edit" "link" in the "2:00 AM" "table_row"
    And the following fields match these values:
      | hideuntil[day]    | 16       |
      | hideuntil[month]  | January  |
      | hideuntil[year]   | 2050     |
