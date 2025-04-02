# Dotfiles

This directory contains the dotfiles for my system

## Requirements

Ensure you have the following installed on your system

- [JetBrainsMono Nerd Font](https://www.nerdfonts.com/font-downloads)
- [Zsh](https://github.com/ohmyzsh/ohmyzsh/wiki/Installing-ZSH)
- [Git](https://git-scm.com/)
- [Stow](https://www.gnu.org/software/stow/)
- [Lazygit](https://github.com/jesseduffield/lazygit/)
- [FZF](https://github.com/junegunn/fzf)
- [Eza](https://github.com/eza-community/eza/)
- [Bat](https://github.com/sharkdp/bat)
- [The Fuck](https://github.com/nvbn/thefuck)
- [Ripgrep](https://github.com/BurntSushi/ripgrep)
- [NeoVim](https://github.com/neovim/neovim)

## Installation

First, check out the dotfiles repo in your `$HOME` directory using git

```bash
git clone git@github.com/harmputman/dotfiles.git
cd dotfiles
```

then clone the zsh plugins

```bash
git clone https://github.com/zsh-users/zsh-autosuggestions.git ~/dotfiles/.zsh/zsh-autosuggestions && \
git clone https://github.com/zsh-users/zsh-completions.git ~/dotfiles/.zsh/zsh-completions && \
git clone https://github.com/zsh-users/zsh-history-substring-search.git ~/dotfiles/.zsh/zsh-history-substring-search && \
git clone https://github.com/zsh-users/zsh-syntax-highlighting.git ~/dotfiles/.zsh/zsh-syntax-highlighting
```

then use Stow to create symlinks

```bash
stow .
```