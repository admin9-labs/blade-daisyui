# Navbar

DaisyUI [Navbar](https://daisyui.com/components/navbar/) 的 Blade 封装。

## 用法

```blade
<x-dui::navbar class="bg-base-100 shadow-sm">
    <x-dui::navbar.start>
        <a class="btn btn-ghost text-xl">Logo</a>
    </x-dui::navbar.start>
    <x-dui::navbar.center>
        <a>Center</a>
    </x-dui::navbar.center>
    <x-dui::navbar.end>
        <button class="btn">Button</button>
    </x-dui::navbar.end>
</x-dui::navbar>
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| — | — | — | 无自定义 props，仅支持 slot 和标准 HTML 属性 |

## 子组件

### `<x-dui::navbar.start>`

导航栏左侧区域，占 50% 宽度。

| Prop | Type | Default | Values |
|------|------|---------|--------|
| — | — | — | 无自定义 props |

### `<x-dui::navbar.center>`

导航栏居中区域。

| Prop | Type | Default | Values |
|------|------|---------|--------|
| — | — | — | 无自定义 props |

### `<x-dui::navbar.end>`

导航栏右侧区域，占 50% 宽度。

| Prop | Type | Default | Values |
|------|------|---------|--------|
| — | — | — | 无自定义 props |

## 示例

### 仅标题

```blade
<x-dui::navbar class="bg-base-100 shadow-sm">
    <a class="btn btn-ghost text-xl">daisyUI</a>
</x-dui::navbar>
```

### 带下拉菜单、居中 Logo 和图标

```blade
<x-dui::navbar class="bg-base-100 shadow-sm">
    <x-dui::navbar.start>
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                </svg>
            </div>
            <ul tabindex="-1" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                <li><a>Homepage</a></li>
                <li><a>Portfolio</a></li>
                <li><a>About</a></li>
            </ul>
        </div>
    </x-dui::navbar.start>
    <x-dui::navbar.center>
        <a class="btn btn-ghost text-xl">daisyUI</a>
    </x-dui::navbar.center>
    <x-dui::navbar.end>
        <button class="btn btn-ghost btn-circle">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </button>
    </x-dui::navbar.end>
</x-dui::navbar>
```

### 自定义颜色

```blade
<x-dui::navbar class="bg-neutral text-neutral-content">
    <a class="btn btn-ghost text-xl">daisyUI</a>
</x-dui::navbar>

<x-dui::navbar class="bg-primary text-primary-content">
    <a class="btn btn-ghost text-xl">daisyUI</a>
</x-dui::navbar>
```

## 渲染结果

```html
<div class="navbar bg-base-100 shadow-sm">
    <div class="navbar-start">
        <a class="btn btn-ghost text-xl">Logo</a>
    </div>
    <div class="navbar-center">
        <a>Center</a>
    </div>
    <div class="navbar-end">
        <button class="btn">Button</button>
    </div>
</div>
```
