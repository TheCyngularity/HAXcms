#!/bin/bash
# Get surge.sh setup
# where am i? move to where I am. This ensures source is properly sourced
DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
cd $DIR
#email
email=$1
#pwd
surgepassword=$2
# project name
projectname=$3
# seed login info just to make it work
cat <<EOF | surge login

$email
$surgepassword
EOF
# move into project to operate on it
cd "../_sites/${projectname}"
# move things around so that its the default from rawgit
mv index.html index2.html
mv rawgit.html index.html
# publish it
surge .
# set this back since its just for publishing
mv index.html rawgit.html
mv index2.html index.html