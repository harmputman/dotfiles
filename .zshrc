eval "$(starship init zsh)"

fpath+=${ZSH_CUSTOM:-${ZSH:-~/.oh-my-zsh}/custom}/plugins/zsh-completions/src

source ~/.zsh/zsh-autosuggestions/zsh-autosuggestions.zsh
source ~/.zsh/zsh-syntax-highlighting/zsh-syntax-highlighting.zsh
source ~/.zsh/zsh-history-substring-search/zsh-history-substring-search.zsh

autoload -Uz compinit && compinit
zstyle ':completion:*' matcher-list 'r:|?=**'

export PATH="$PATH:$HOME/.composer/vendor/bin"