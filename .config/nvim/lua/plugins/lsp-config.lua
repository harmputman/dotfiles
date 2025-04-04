return {
    {
        "williamboman/mason.nvim",
        config = function()
            require("mason").setup()
        end
    },
    {
        "williamboman/mason-lspconfig.nvim",
        config = function()
            require("mason-lspconfig").setup({
                ensure_installed = {
                    "lua_ls",
                    "bashls",
                    "cssls",
                    "dockerls",
                    "gopls",
                    "html",
                    "jsonls",
                    "intelephense",
                    "pylsp",
                    "sqls",
                    "ts_ls",
                    "twiggy_language_server",
                    "vuels",
                },
                automatic_installation = true,
            })
        end
    },
    {
        "neovim/nvim-lspconfig",
        config = function()
            local lspconfig = require("lspconfig")
            lspconfig.lua_ls.setup({})
            lspconfig.bashls.setup({})
            lspconfig.cssls.setup({})
            lspconfig.dockerls.setup({})
            lspconfig.gopls.setup({})
            lspconfig.html.setup({})
            lspconfig.jsonls.setup({})
            lspconfig.intelephense.setup({})
            lspconfig.pylsp.setup({})
            lspconfig.sqls.setup({})
            lspconfig.ts_ls.setup({})
            lspconfig.twiggy_language_server.setup({})
            lspconfig.vuels.setup({})

            vim.keymap.set('n', 'gd', vim.lsp.buf.definition, {})
            vim.keymap.set('n', '<leader>ca', vim.lsp.buf.code_action, {})
            vim.keymap.set('n', '<leader>do', vim.diagnostic.open_float, {})
        end
    },
}
