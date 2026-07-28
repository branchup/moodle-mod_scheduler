@mod @mod_scheduler @javascript
Feature: Teacher can delete slots
  In order to manage my scheduler slots
  As a teacher
  I need to be able to delete them

  Background:
    Given the following "users" exist:
      | username | firstname | lastname | email                |
      | manager1 | Manager   | 1        | manager1@example.com |
      | teacher1 | Teacher   | 1        | teacher1@example.com |
      | student1 | Student   | 1        | student1@example.com |
    And the following "courses" exist:
      | fullname | shortname | category |
      | Course 1 | C1 | 0 |
    And the following "course enrolments" exist:
      | user | course | role |
      | teacher1 | C1 | teacher        |
      | manager1 | C1 | editingteacher |
      | student1 | C1 | student        |
    And the following "activities" exist:
      | activity  | name           | intro | course | idnumber   |
      | scheduler | Test scheduler | n     | C1     | scheduler1 |
    And the following "mod_scheduler > slots" exist:
      | scheduler  | starttime            | duration | teacher   | student  | location  |
      | scheduler1 | ##yesterday 1:00am## | 45       | teacher1  | student1 | My office |
      | scheduler1 | ##yesterday 2:00am## | 45       | teacher1  |          | My office |
      | scheduler1 | ##yesterday 3:00am## | 45       | teacher1  |          | My office |
      | scheduler1 | ##yesterday 4:00am## | 45       | manager1  | student1 | My office |
      | scheduler1 | ##yesterday 5:00am## | 45       | manager1  |          | My office |
      | scheduler1 | ##tomorrow 1:00pm##  | 45       | teacher1  | student1 | My office |
      | scheduler1 | ##tomorrow 2:00pm##  | 45       | teacher1  |          | My office |
      | scheduler1 | ##tomorrow 3:00pm##  | 45       | teacher1  |          | My office |
      | scheduler1 | ##tomorrow 4:00pm##  | 45       | manager1  | student1 | My office |
      | scheduler1 | ##tomorrow 5:00pm##  | 45       | manager1  |          | My office |

  Scenario: Teachers can delete individual past slots with bookings
    Given I am on the "scheduler1" "activity" page logged in as teacher1
    And I follow "Past & seen"
    And I should see "1:00 AM" in the "slotmanager" "table"
    And I should see "2:00 AM" in the "slotmanager" "table"
    And I should see "3:00 AM" in the "slotmanager" "table"
    When I click on "Delete" "link" in the "1:00 AM" "table_row"
    Then I should see "You are about to delete a slot booked or attended by a student" in the "Confirm deletion" "dialogue"
    And I click on "Delete" "button" in the "Confirm deletion" "dialogue"
    And I should see "1 slot deleted"
    And I should not see "1:00 AM" in the "slotmanager" "table"
    And I should see "2:00 AM" in the "slotmanager" "table"
    And I should see "3:00 AM" in the "slotmanager" "table"

  Scenario: Teachers cannot delete individual future slots with bookings
    Given I am on the "scheduler1" "activity" page logged in as teacher1
    When I click on "Delete" "link" in the "1:00 PM" "table_row"
    Then I should see "This upcoming slot has students booked onto it" in the "Confirm deletion" "dialogue"
    And the "button[data-action=save]" "css_element" should be disabled

  Scenario: Teachers can delete individual future slots with bookings after revoking them
    Given I am on the "scheduler1" "activity" page logged in as teacher1
    And I follow "All"
    And I should see "1:00 AM" in the "slotmanager" "table"
    And I click on "Delete" "link" in the "1:00 PM" "table_row"
    And I should see "This upcoming slot has students booked onto it" in the "Confirm deletion" "dialogue"
    And I click on "Cancel" "button" in the "Confirm deletion" "dialogue"
    And I click on "Revoke the appointment" "link" in the "1:00 PM" "table_row"
    And I click on "Yes" "button" in the "Confirmation" "dialogue"
    When I click on "Delete" "link" in the "1:00 PM" "table_row"
    Then I should see "Are you sure that you want to delete this slot?"
    And I click on "Delete" "button" in the "Confirm deletion" "dialogue"
    And I should see "1 slot deleted"
    And I should not see "1:00 PM" in the "slotmanager" "table"
    And I should see "1:00 AM" in the "slotmanager" "table"

  Scenario: Teachers can delete individual unused past slots
    Given I am on the "scheduler1" "activity" page logged in as teacher1
    And I follow "All"
    And I should see "2:00 PM" in the "slotmanager" "table"
    When I click on "Delete" "link" in the "2:00 AM" "table_row"
    Then I should see "Are you sure" in the "Confirm deletion" "dialogue"
    And I click on "Delete" "button" in the "Confirm deletion" "dialogue"
    And I should see "1 slot deleted"
    And I should not see "2:00 AM" in the "slotmanager" "table"
    And I should see "2:00 PM" in the "slotmanager" "table"

  Scenario: Teachers can delete individual unused future slots
    Given I am on the "scheduler1" "activity" page logged in as teacher1
    And I follow "All"
    And I should see "2:00 AM" in the "slotmanager" "table"
    When I click on "Delete" "link" in the "2:00 PM" "table_row"
    Then I should see "Are you sure" in the "Confirm deletion" "dialogue"
    And I click on "Delete" "button" in the "Confirm deletion" "dialogue"
    And I should see "1 slot deleted"
    And I should not see "2:00 PM" in the "slotmanager" "table"
    And I should see "2:00 AM" in the "slotmanager" "table"

  Scenario: Teachers can delete their unused slots
    Given I am on the "scheduler1" "activity" page logged in as teacher1
    And I follow "All"
    And I should see "1:00 AM" in the "slotmanager" "table"
    And I should see "2:00 AM" in the "slotmanager" "table"
    And I should see "3:00 AM" in the "slotmanager" "table"
    And I should see "1:00 PM" in the "slotmanager" "table"
    And I should see "2:00 PM" in the "slotmanager" "table"
    And I should see "3:00 PM" in the "slotmanager" "table"
    And I should not see "4:00 AM" in the "slotmanager" "table"
    And I should not see "4:00 PM" in the "slotmanager" "table"
    And I click on "Delete slots" "link"
    When I click on "Delete my unused slots" "link"
    Then I should see "You are about to delete 4 empty or unused slot(s)" in the "Confirm deletion" "dialogue"
    And I click on "Delete" "button" in the "Confirm deletion" "dialogue"
    And I should see "4 slots have been deleted"
    And I should see "1:00 AM" in the "slotmanager" "table"
    And I should not see "2:00 AM" in the "slotmanager" "table"
    And I should not see "3:00 AM" in the "slotmanager" "table"
    And I should see "1:00 PM" in the "slotmanager" "table"
    And I should not see "2:00 PM" in the "slotmanager" "table"
    And I should not see "3:00 PM" in the "slotmanager" "table"
    And I am on the "scheduler1" "activity" page logged in as manager1
    And I follow "All"
    And I should see "4:00 AM" in the "slotmanager" "table"
    And I should see "5:00 AM" in the "slotmanager" "table"
    And I should see "4:00 PM" in the "slotmanager" "table"
    And I should see "5:00 PM" in the "slotmanager" "table"

  Scenario: Teachers cannot delete all their slots with future bookings
    Given I am on the "scheduler1" "activity" page logged in as teacher1
    And I click on "Delete slots" "link"
    When I click on "Delete all my slots" "link"
    Then I should see "The selection includes upcoming slots that have students booked onto them." in the "Confirm deletion" "dialogue"
    And the "button[data-action=save]" "css_element" should be disabled

  Scenario: Teachers can delete all their slots with future bookings after revoking them
    Given I am on the "scheduler1" "activity" page logged in as teacher1
    And I follow "All"
    And I should see "1:00 AM" in the "slotmanager" "table"
    And I should see "2:00 AM" in the "slotmanager" "table"
    And I should see "3:00 AM" in the "slotmanager" "table"
    And I should see "1:00 PM" in the "slotmanager" "table"
    And I should see "2:00 PM" in the "slotmanager" "table"
    And I should see "3:00 PM" in the "slotmanager" "table"
    And I click on "Revoke the appointment" "link" in the "1:00 PM" "table_row"
    And I click on "Yes" "button" in the "Confirmation" "dialogue"
    And I click on "Delete slots" "link"
    When I click on "Delete all my slots" "link"
    Then I should see "You are about to delete 6 slot(s)" in the "Confirm deletion" "dialogue"
    And I should see "some of which have been booked or attended by students" in the "Confirm deletion" "dialogue"
    And I click on "Delete" "button" in the "Confirm deletion" "dialogue"
    And I should see "6 slots have been deleted"
    And "slotmanager" "table" should not be visible
    And I am on the "scheduler1" "activity" page logged in as manager1
    And I follow "All"
    And I should see "4:00 AM" in the "slotmanager" "table"
    And I should see "5:00 AM" in the "slotmanager" "table"
    And I should see "4:00 PM" in the "slotmanager" "table"
    And I should see "5:00 PM" in the "slotmanager" "table"

  Scenario: Teachers can delete selected unused past slots
    Given I am on the "scheduler1" "activity" page logged in as teacher1
    And I follow "All"
    And I should see "1:00 AM" in the "slotmanager" "table"
    And I should see "1:00 PM" in the "slotmanager" "table"
    And I should see "2:00 PM" in the "slotmanager" "table"
    And I should see "3:00 PM" in the "slotmanager" "table"
    And I click on "selectedslot[]" "checkbox" in the "2:00 AM" "table_row"
    And I click on "selectedslot[]" "checkbox" in the "3:00 AM" "table_row"
    And I click on "Delete slots" "link"
    When I click on "Delete selected slots" "link"
    Then I should see "You are about to delete 2 slot(s)" in the "Confirm deletion" "dialogue"
    And I click on "Delete" "button" in the "Confirm deletion" "dialogue"
    And I should see "2 slots have been deleted"
    And I should see "1:00 AM" in the "slotmanager" "table"
    And I should see "1:00 PM" in the "slotmanager" "table"
    And I should see "2:00 PM" in the "slotmanager" "table"
    And I should see "3:00 PM" in the "slotmanager" "table"
    And I should not see "2:00 AM" in the "slotmanager" "table"
    And I should not see "3:00 AM" in the "slotmanager" "table"

  Scenario: Teachers can delete selected unused future slots
    Given I am on the "scheduler1" "activity" page logged in as teacher1
    And I follow "All"
    And I should see "1:00 AM" in the "slotmanager" "table"
    And I should see "2:00 AM" in the "slotmanager" "table"
    And I should see "3:00 AM" in the "slotmanager" "table"
    And I should see "1:00 PM" in the "slotmanager" "table"
    And I click on "selectedslot[]" "checkbox" in the "2:00 PM" "table_row"
    And I click on "selectedslot[]" "checkbox" in the "3:00 PM" "table_row"
    And I click on "Delete slots" "link"
    When I click on "Delete selected slots" "link"
    Then I should see "You are about to delete 2 slot(s)" in the "Confirm deletion" "dialogue"
    And I click on "Delete" "button" in the "Confirm deletion" "dialogue"
    And I should see "2 slots have been deleted"
    And I should see "1:00 AM" in the "slotmanager" "table"
    And I should see "2:00 AM" in the "slotmanager" "table"
    And I should see "3:00 AM" in the "slotmanager" "table"
    And I should see "1:00 PM" in the "slotmanager" "table"
    And I should not see "2:00 PM" in the "slotmanager" "table"
    And I should not see "3:00 PM" in the "slotmanager" "table"

  Scenario: Teachers cannot delete selected future slots with bookings
    Given I am on the "scheduler1" "activity" page logged in as teacher1
    And I click on "selectedslot[]" "checkbox" in the "1:00 PM" "table_row"
    And I click on "selectedslot[]" "checkbox" in the "2:00 PM" "table_row"
    And I click on "Delete slots" "link"
    When I click on "Delete selected slots" "link"
    Then I should see "have students booked onto them" in the "Confirm deletion" "dialogue"
    And the "button[data-action=save]" "css_element" should be disabled

  Scenario: Teachers can delete selected future slots with bookings after revoking them
    Given I am on the "scheduler1" "activity" page logged in as teacher1
    And I follow "All"
    And I click on "Revoke the appointment" "link" in the "1:00 PM" "table_row"
    And I click on "Yes" "button" in the "Confirmation" "dialogue"
    And I click on "selectedslot[]" "checkbox" in the "1:00 PM" "table_row"
    And I click on "selectedslot[]" "checkbox" in the "2:00 PM" "table_row"
    And I click on "Delete slots" "link"
    When I click on "Delete selected slots" "link"
    Then I should see "You are about to delete 2 slot(s)"
    And I click on "Delete" "button" in the "Confirm deletion" "dialogue"
    And I should see "2 slots have been deleted"
    And I should see "1:00 AM" in the "slotmanager" "table"
    And I should see "2:00 AM" in the "slotmanager" "table"
    And I should see "3:00 AM" in the "slotmanager" "table"
    And I should not see "1:00 PM" in the "slotmanager" "table"
    And I should not see "2:00 PM" in the "slotmanager" "table"
    And I should see "3:00 PM" in the "slotmanager" "table"

  Scenario: Teachers can delete selected past slots with bookings
    Given I am on the "scheduler1" "activity" page logged in as teacher1
    And I follow "Past & seen"
    And I click on "selectedslot[]" "checkbox" in the "1:00 AM" "table_row"
    And I click on "selectedslot[]" "checkbox" in the "2:00 AM" "table_row"
    And I click on "Delete slots" "link"
    When I click on "Delete selected slots" "link"
    Then I should see "which have been booked or attended" in the "Confirm deletion" "dialogue"
    And I click on "Delete" "button" in the "Confirm deletion" "dialogue"
    And I should see "2 slots have been deleted"
    And I should not see "1:00 AM" in the "slotmanager" "table"
    And I should not see "2:00 AM" in the "slotmanager" "table"
    And I should see "3:00 AM" in the "slotmanager" "table"

  Scenario: Teachers cannot delete all slots with future bookings
    Given I am on the "scheduler1" "activity" page logged in as manager1
    And I click on "Delete slots" "link"
    When I click on "Delete all slots" "link"
    Then I should see "have students booked onto them" in the "Confirm deletion" "dialogue"
    And the "button[data-action=save]" "css_element" should be disabled
    And I click on "Cancel" "button" in the "Confirm deletion" "dialogue"
    And I click on "Revoke the appointment" "link" in the "4:00 PM" "table_row"
    And I click on "Yes" "button" in the "Confirmation" "dialogue"
    And I click on "Delete slots" "link"
    And I click on "Delete all slots" "link"
    And I should see "have students booked onto them" in the "Confirm deletion" "dialogue"
    And the "button[data-action=save]" "css_element" should be disabled

  Scenario: Teachers can delete all slots with past bookings
    Given I am on the "scheduler1" "activity" page logged in as manager1
    And I follow "All"
    And I click on "Revoke the appointment" "link" in the "1:00 PM" "table_row"
    And I click on "Yes" "button" in the "Confirmation" "dialogue"
    And I click on "Revoke the appointment" "link" in the "4:00 PM" "table_row"
    And I click on "Yes" "button" in the "Confirmation" "dialogue"
    And I click on "Delete slots" "link"
    When I click on "Delete all slots" "link"
    Then I should see "which have been booked or attended" in the "Confirm deletion" "dialogue"
    And I click on "Delete" "button" in the "Confirm deletion" "dialogue"
    And I should see "10 slots have been deleted"

  Scenario: Teachers can delete all the unused slots
    Given I am on the "scheduler1" "activity" page logged in as manager1
    And I follow "All"
    And I should see "1:00 AM" in the "slotmanager" "table"
    And I should see "2:00 AM" in the "slotmanager" "table"
    And I should see "3:00 AM" in the "slotmanager" "table"
    And I should see "4:00 AM" in the "slotmanager" "table"
    And I should see "5:00 AM" in the "slotmanager" "table"
    And I should see "1:00 PM" in the "slotmanager" "table"
    And I should see "2:00 PM" in the "slotmanager" "table"
    And I should see "3:00 PM" in the "slotmanager" "table"
    And I should see "4:00 PM" in the "slotmanager" "table"
    And I should see "5:00 PM" in the "slotmanager" "table"
    And I click on "Delete slots" "link"
    When I click on "Delete unused slots" "link"
    Then I should see "You are about to delete 6 empty or unused slot(s)" in the "Confirm deletion" "dialogue"
    And I click on "Delete" "button" in the "Confirm deletion" "dialogue"
    And I should see "6 slots have been deleted"
    And I should see "1:00 AM" in the "slotmanager" "table"
    And I should not see "2:00 AM" in the "slotmanager" "table"
    And I should not see "3:00 AM" in the "slotmanager" "table"
    And I should see "4:00 AM" in the "slotmanager" "table"
    And I should not see "5:00 AM" in the "slotmanager" "table"
    And I should see "1:00 PM" in the "slotmanager" "table"
    And I should not see "2:00 PM" in the "slotmanager" "table"
    And I should not see "3:00 PM" in the "slotmanager" "table"
    And I should see "4:00 PM" in the "slotmanager" "table"
    And I should not see "5:00 PM" in the "slotmanager" "table"
