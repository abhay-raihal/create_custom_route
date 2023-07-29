#!/bin/bash
TEST_SUITE_STATUS=0
log_file_name="test-output.log"
export START_TIME=$(date +%s)
echo "start-time: ${START_TIME}"
SUITE_NAME="Affordibility Test Suite" php vendor/phpunit/phpunit/phpunit -d memory_limit=4096M --testsuite "Affordibility Test Suite" >> $log_file_name
export TEST_SUITE_STATUS=$((TEST_SUITE_STATUS + $?))
export END_TIME=$(date +%s)
echo "end-time: ${END_TIME}"
cat $log_file_name
echo "${START_TIME},${END_TIME},${TEST_SUITE_STATUS}" >> utMetrics.csv
exit $TEST_SUITE_STATUS
