test_params=vendor/bin/tester -p php tests

test:
	$(test_params)

test-coverage:
	$(test_params) --coverage-src src --coverage tests/coverage.html -c tests/php.ini