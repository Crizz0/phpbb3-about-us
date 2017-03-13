#!/bin/bash
#
# This file is part of the about us extension for phpBB
#
# @copyright (c) Crizzo
# @license GNU General Public License, version 2 (GPL-2.0)
#
#
set -e
set -x

EXTNAME=$1
BRANCH=$2

# This assumes that we are still in the ext-dir
EXTPATH=.
LANGTESTPATH=../../langtest

if [ -d $LANGTESTPATH ]; then
	rm -r $LANGTESTPATH
fi
mkdir $LANGTESTPATH
cp -r $EXTPATH/language/ $LANGTESTPATH/language

# copy the license file to all languages to avoid that fatal error
for i in $(ls $EXTPATH/language/)
do
	cp $EXTPATH/license.txt $LANGTESTPATH/language/$i/LICENSE
done

# link to vendor dir and travis dir
currentdir=`pwd`
cd $EXTPATH
absextpath=`pwd`
cd $currentdir
ln -s $absextpath/vendor/ $LANGTESTPATH/vendor
ln -s $absextpath/travis/ $LANGTESTPATH/travis
