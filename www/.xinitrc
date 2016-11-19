#!/bin/sh
xrdb -m $HOME/.Xdefaults
xhost + > /dev/null &
xsetroot -solid cadetblue &
# xphoon -t 5 &
xterm -C -geometry 80x9+0+0 -title Console -n Console &
xterm  -title `hostname` -n `hostname` &
/usr/bin/X11/twm 
