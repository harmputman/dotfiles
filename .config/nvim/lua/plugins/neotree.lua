return {
    "nvim-neo-tree/neo-tree.nvim",
    branch = "v3.x",
    dependencies = {
        "nvim-lua/plenary.nvim",
        "nvim-tree/nvim-web-devicons",
        "MunifTanjim/nui.nvim",
    },
    lazy = false,
    config = function ()
        vim.keymap.set("n", "<leader>e", ":Neotree filesystem reveal left<CR>" )
        vim.keymap.set("n", "<C-1>", ":Neotree close<CR>" )
    end
}