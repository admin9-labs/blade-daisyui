# Menu

DaisyUI [Menu](https://daisyui.com/components/menu/) 的 Blade 封装。

## 用法

```blade
<x-dui::menu class="bg-base-200 w-56 rounded-box">
    <li><a>Item 1</a></li>
    <li><a>Item 2</a></li>
    <li><a>Item 3</a></li>
</x-dui::menu>
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| size | string | null | xs, sm, md, lg, xl |
| direction | string | null | vertical, horizontal |

## 子组件

### `<x-dui::menu.item>`

菜单项，自动渲染 `<li><a>` 结构，处理 `menu-active` 和 `menu-disabled` class。

| Prop | Type | Default | Values |
|------|------|---------|--------|
| active | bool | false | — |
| disabled | bool | false | — |

### `<x-dui::menu.title>`

菜单标题项。

| Prop | Type | Default | Values |
|------|------|---------|--------|
| — | — | — | 无自定义 props |

### `<x-dui::menu.dropdown>`

可折叠子菜单（通过 JS 控制 class 切换）。

| Prop | Type | Default | Values |
|------|------|---------|--------|
| show | bool | false | -- |

### `<x-dui::menu.dropdown-toggle>`

可折叠子菜单的切换按钮。

| Prop | Type | Default | Values |
|------|------|---------|--------|
| show | bool | false | -- |

## 示例

### 使用 menu.item（推荐）

```blade
<x-dui::menu class="bg-base-200 w-56 rounded-box">
    <x-dui::menu.item>Item 1</x-dui::menu.item>
    <x-dui::menu.item :active="true">Item 2</x-dui::menu.item>
    <x-dui::menu.item>Item 3</x-dui::menu.item>
</x-dui::menu>
```

### 基础菜单（旧用法）

```blade
<x-dui::menu class="bg-base-200 w-56 rounded-box">
    <li><a>Item 1</a></li>
    <li><a>Item 2</a></li>
    <li><a>Item 3</a></li>
</x-dui::menu>
```

### 带标题

```blade
<x-dui::menu class="bg-base-200 w-56 rounded-box">
    <x-dui::menu.title>Title</x-dui::menu.title>
    <li><a>Item 1</a></li>
    <li><a>Item 2</a></li>
    <li><a>Item 3</a></li>
</x-dui::menu>
```

### 水平菜单

```blade
<x-dui::menu direction="horizontal" class="bg-base-200 rounded-box">
    <li><a>Item 1</a></li>
    <li><a>Item 2</a></li>
    <li><a>Item 3</a></li>
</x-dui::menu>
```

### 不同尺寸

```blade
<x-dui::menu size="xs" class="bg-base-200 w-56 rounded-box">
    <li><a>Xsmall 1</a></li>
    <li><a>Xsmall 2</a></li>
</x-dui::menu>

<x-dui::menu size="lg" class="bg-base-200 w-56 rounded-box">
    <li><a>Large 1</a></li>
    <li><a>Large 2</a></li>
</x-dui::menu>
```

### 带活动项（旧用法）

```blade
<x-dui::menu class="bg-base-200 w-56 rounded-box">
    <li><a>Item 1</a></li>
    <li><a class="menu-active">Item 2</a></li>
    <li><a>Item 3</a></li>
</x-dui::menu>
```

### 可折叠子菜单（details）

```blade
<x-dui::menu class="bg-base-200 w-56 rounded-box">
    <li><a>Item 1</a></li>
    <li>
        <details open>
            <summary>Parent</summary>
            <ul>
                <li><a>Submenu 1</a></li>
                <li><a>Submenu 2</a></li>
            </ul>
        </details>
    </li>
    <li><a>Item 3</a></li>
</x-dui::menu>
```

### 可折叠子菜单（JS class 切换）

```blade
<x-dui::menu class="bg-base-200 w-56 rounded-box">
    <li><a>Item 1</a></li>
    <li>
        <x-dui::menu.dropdown-toggle :show="true">Parent</x-dui::menu.dropdown-toggle>
        <x-dui::menu.dropdown :show="true">
            <li><a>Submenu 1</a></li>
            <li><a>Submenu 2</a></li>
        </x-dui::menu.dropdown>
    </li>
</x-dui::menu>
```

## 渲染结果

```html
<ul class="menu menu-horizontal menu-lg bg-base-200 rounded-box">
    <li class="menu-title">Title</li>
    <li><a>Item 1</a></li>
    <li>
        <span class="menu-dropdown-toggle menu-dropdown-show">Parent</span>
        <ul class="menu-dropdown menu-dropdown-show">
            <li><a>Submenu 1</a></li>
        </ul>
    </li>
</ul>
```
