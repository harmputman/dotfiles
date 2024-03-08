# Dotfiles

This directory contains the dotfiles for my system

## Requirements

Ensure you have the following installed on your system

- [JetBrainsMono Nerd Font](https://www.nerdfonts.com/font-downloads)
- [Git](https://git-scm.com/)
- [Stow](https://www.gnu.org/software/stow/)

## Installation

First, check out the dotfiles repo in your $HOME directory using git

```bash
git clone git@github.com/harmputman/dotfiles.git
cd dotfiles
```

then clone the zsh plugins

```bash
git git clone https://github.com/zsh-users/zsh-autosuggestions.git ~/dotfiles/.zsh/zsh-autosuggestions
git git clone https://github.com/zsh-users/zsh-users/zsh-completions.git ~/dotfiles/.zsh/zsh-users/zsh-completions
git git clone https://github.com/zsh-users/zsh-history-substring-search.git ~/dotfiles/.zsh/zsh-history-substring-search
git git clone https://github.com/zsh-users/zsh-syntax-highlighting.git ~/dotfiles/.zsh/zsh-syntax-highlighting
```

then use Stow to create symlinks

```bash
stow .
```
