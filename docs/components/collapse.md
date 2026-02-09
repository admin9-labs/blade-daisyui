# Collapse

DaisyUI [Collapse](https://daisyui.com/components/collapse/) 的 Blade 封装。

## 用法

```blade
<x-dui::collapse icon="arrow">
    <x-dui::collapse.title class="font-semibold">点击展开</x-dui::collapse.title>
    <x-dui::collapse.content class="text-sm">折叠内容。</x-dui::collapse.content>
</x-dui::collapse>
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| icon | string\|null | null | arrow, plus |
| open | bool | false | — |
| close | bool | false | — |

## 子组件

### `<x-dui::collapse.title>`

折叠标题区域，自动添加 `collapse-title` class。

| Prop | Type | Default | Values |
|------|------|---------|--------|
| — | — | — | 无自定义 props |

### `<x-dui::collapse.content>`

折叠内容区域，自动添加 `collapse-content` class。

| Prop | Type | Default | Values |
|------|------|---------|--------|
| — | — | — | 无自定义 props |

## 示例

### 带箭头图标

```blade
<x-dui::collapse icon="arrow" class="bg-base-100 border border-base-300">
    <x-dui::collapse.title class="font-semibold">如何创建账户？</x-dui::collapse.title>
    <x-dui::collapse.content class="text-sm">点击右上角的"注册"按钮。</x-dui::collapse.content>
</x-dui::collapse>
```

### 带加减号图标

```blade
<x-dui::collapse icon="plus" class="bg-base-100 border border-base-300">
    <x-dui::collapse.title class="font-semibold">如何创建账户？</x-dui::collapse.title>
    <x-dui::collapse.content class="text-sm">点击右上角的"注册"按钮。</x-dui::collapse.content>
</x-dui::collapse>
```

### 使用 tabindex 实现焦点展开

```blade
<x-dui::collapse icon="arrow" tabindex="0" class="bg-base-100 border border-base-300">
    <x-dui::collapse.title class="font-semibold">点击展开，失焦关闭</x-dui::collapse.title>
    <x-dui::collapse.content class="text-sm">内容区域。</x-dui::collapse.content>
</x-dui::collapse>
```

### 强制展开/关闭

```blade
<x-dui::collapse :open="true" class="bg-base-100 border border-base-300">
    <x-dui::collapse.title class="font-semibold">始终展开</x-dui::collapse.title>
    <x-dui::collapse.content class="text-sm">内容区域。</x-dui::collapse.content>
</x-dui::collapse>

<x-dui::collapse :close="true" class="bg-base-100 border border-base-300">
    <x-dui::collapse.title class="font-semibold">始终关闭</x-dui::collapse.title>
    <x-dui::collapse.content class="text-sm">内容区域。</x-dui::collapse.content>
</x-dui::collapse>
```

也可以通过 class 直接控制：

```blade
<x-dui::collapse class="collapse-open bg-base-100 border border-base-300">
    <x-dui::collapse.title class="font-semibold">始终展开</x-dui::collapse.title>
    <x-dui::collapse.content class="text-sm">内容区域。</x-dui::collapse.content>
</x-dui::collapse>
```

## 渲染结果

```html
<div class="collapse collapse-arrow bg-base-100 border border-base-300">
    <div class="collapse-title font-semibold">如何创建账户？</div>
    <div class="collapse-content text-sm">点击右上角的"注册"按钮。</div>
</div>
```
