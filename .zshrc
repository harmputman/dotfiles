eval "$(starship init zsh)"

fpath+=~/.zsh/zsh-completions/src

source ~/.zsh/zsh-autosuggestions/zsh-autosuggestions.zsh
source ~/.zsh/zsh-syntax-highlighting/zsh-syntax-highlighting.zsh
source ~/.zsh/zsh-history-substring-search/zsh-history-substring-search.zsh

autoload -Uz compinit && compinit
# fuzzy case insensitive path-completion
zstyle ':completion:*' matcher-list '' 'm:{a-zA-Z}={A-Za-z}' 'r:|[._-]=* r:|=*' 'l:|=* r:|=*'

# bash
eval "$(fzf --bash)"

# zsh
source <(fzf --zsh)

# fish
fzf --fish | source

export PATH="$PATH:$HOME/.composer/vendor/bin"
export PATH="$PATH:$HOME/.local/share"

alias lg='lazygit'
alias ls='eza --icons --git'
