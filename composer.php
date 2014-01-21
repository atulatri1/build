#!php
<?php
echo "I am working\n";
var_dump(getenv('TRAVIS_BRANCH'));
var_dump(getenv('TRAVIS_COMMIT'));
var_dump(getenv('TRAVIS_REPO_SLUG'));
