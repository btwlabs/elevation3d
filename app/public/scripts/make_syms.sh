#!/bin/bash
# get to right place 
cd ../app/public/wp-content/
# clean out old
rm -rf plugins/elv3d_wp_helper
rm -rf themes/genesis-elv3d
# make plugin syms
cd plugins
ln -s ../../../../wp-content/plugins/elv3d_wp_helper .
# make theme syms
cd ../themes
ln -s ../../../../wp-content/themes/genesis-elv3d .
cd ../../../../scripts
