#!/bin/sh

# Enable nicer messaging for build status.
BLUE_BOLD='\033[1;34m';
GREEN_BOLD='\033[1;32m';
RED_BOLD='\033[1;31m';
YELLOW_BOLD='\033[1;33m';
COLOR_RESET='\033[0m';

error () {
	echo "\n🤯 ${RED_BOLD}$1${COLOR_RESET}\n"
	exit 1
}
status () {
	echo "\n👩‍💻 ${BLUE_BOLD}$1${COLOR_RESET}\n"
}
success () {
	echo "\n✅ ${GREEN_BOLD}$1${COLOR_RESET}\n"
}
warning () {
	echo "\n${YELLOW_BOLD}$1${COLOR_RESET}\n"
}

# We want to be in the root `wpcomsh` dir
cd `dirname "$0"` && cd ..

status "Creating GitHub release"

CURRENTBRANCH=`git rev-parse --abbrev-ref HEAD`

status "Reading the current version from wpcomsh.php"
VERSION=`awk '/[^[:graph:]]Version/{print $NF}' wpcomsh.php`
echo "Version that will be built and released is ${VERSION}"

status "Making the build artifact"
make build

ZIP_FILE="build/wpcomsh.${VERSION}.zip"

if [ ! -r $ZIP_FILE ]; then
	error "The build artifact could not be found at ${ZIP_FILE}"
fi

status "Creating the release and attaching the build artifact"
echo ""
echo "!!! When hub asks for your github password, provide a Personal Access Token (with at least repo scope) instead."
echo "You may generate one here: https://github.com/settings/tokens"
echo "This is accurate as of Jan 2021, but GitHub may make changes to 'hub' in the future."
echo ""
# GitHub deprecated its Authorizations API, so a direct password no longer works.
# Reference: https://github.com/github/hub/issues/2655#issuecomment-735836048

BRANCH="build/${VERSION}"
git checkout -b $BRANCH
hub release create -m $VERSION -m "Release of version $VERSION. See README.md for details." "v${VERSION}" --attach="${ZIP_FILE}" \
	|| error "Failed creating a release for ${VERSION}."

git checkout $CURRENTBRANCH
git branch -D $BRANCH

success "GitHub release complete."
