# ~/.profile: executed by the command interpreter for login shells.
# This file is not read by bash(1), if ~/.bash_profile or ~/.bash_login
# exists.
# see /usr/share/doc/bash/examples/startup-files for examples.
# the files are located in the bash-doc package.

# the default umask is set in /etc/profile; for setting the umask
# for ssh logins, install and configure the libpam-umask package.
#umask 022

# if running bash
if [ -n "$BASH_VERSION" ]; then
    # include .bashrc if it exists
    if [ -f "$HOME/.bashrc" ]; then
	. "$HOME/.bashrc"
    fi
fi

# set PATH so it includes user's private bin if it exists
if [ -d "$HOME/bin" ] ; then
    PATH="$HOME/bin:$PATH"
fi

# set PATH so it includes user's private bin if it exists
if [ -d "$HOME/.local/bin" ] ; then
    PATH="$HOME/.local/bin:$PATH"
fi


## defaults ##
export GPG_TTY=$(tty)
# envs
export PATH=$PATH:/envs/bin
# bbj
export BBJ_USER=$USER

# latest GO
export GOROOT=/usr/local/go
export PATH=$GOROOT/bin:$PATH

if [[ ! $TERM =~ screen ]] || [[ ! $TMUX =~ tmux ]]; then
    _byobu_sourced=1 . /usr/bin/byobu-launch 2>/dev/null || true
    # when we use `byobu-disable` we have an emtpy if..
    true
fi
