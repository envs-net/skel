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

#
# envs.net
#
alias tb="nc tb.envs.net 9999"
0file() { curl -F"file=@$1" https://0x0.envs.net ; }
0url() { curl -F"url=$1" https://0x0.envs.net ; }
0short() { curl -F"shorten=$1" https://0x0.envs.net ; }
