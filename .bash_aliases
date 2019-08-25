#
# User specific exports
#

export EDITOR="nano"
export PAGER="most"

#
# User specific aliases and functions
#

alias grep='grep --color'
alias psa='ps -axuwf'

alias ls='exa -ag'
alias la='exa -lag'
alias ll='exa -lahg'

# todo.sh
alias todo='/usr/local/bin/todo.sh -d ~/.todo/config'
alias t='/usr/local/bin/todo.sh -d ~/.todo/config'

#
# envs.net
#
alias tb="nc tb.envs.net 9999"
0file() { curl -F"file=@$1" https://envs.sh ; }
0url() { curl -F"url=$1" https://envs.sh ; }
0short() { curl -F"shorten=$1" https://envs.sh ; }
