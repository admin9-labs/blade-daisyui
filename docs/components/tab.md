# Tab

DaisyUI [Tabs](https://daisyui.com/components/tab/) 的 Blade 封装。

## 用法

```blade
<x-dui::tab>
    <a role="tab" class="tab">Tab 1</a>
    <a role="tab" class="tab tab-active">Tab 2</a>
    <a role="tab" class="tab">Tab 3</a>
</x-dui::tab>
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| variant | string | null | border, lift, box |
| size | string | null | xs, sm, md, lg, xl |
| placement | string | null | top, bottom |

## 子组件

### `<x-dui::tab.item>`

单个 Tab 项，自动添加 `tab` class。

| Prop | Type | Default | Values |
|------|------|---------|--------|
| active | bool | false | — |
| disabled | bool | false | — |
| tag | string | 'a' | a, button, input |

> `tag="input"` 时渲染为 `<input type="radio" role="tab" />`，其余渲染为对应标签。

### `<x-dui::tab.content>`

Tab 内容面板，紧跟在 tab 按钮/radio 后面。

| Prop | Type | Default | Values |
|------|------|---------|--------|
| — | — | — | 无自定义 props |

## 示例

### 基础 Tabs（使用 tab.item）

```blade
<x-dui::tab>
    <x-dui::tab.item>Tab 1</x-dui::tab.item>
    <x-dui::tab.item :active="true">Tab 2</x-dui::tab.item>
    <x-dui::tab.item>Tab 3</x-dui::tab.item>
</x-dui::tab>
```

### 基础 Tabs（旧用法）

```blade
<x-dui::tab>
    <a role="tab" class="tab">Tab 1</a>
    <a role="tab" class="tab tab-active">Tab 2</a>
    <a role="tab" class="tab">Tab 3</a>
</x-dui::tab>
```

### tabs-border 样式

```blade
<x-dui::tab variant="border">
    <a role="tab" class="tab">Tab 1</a>
    <a role="tab" class="tab tab-active">Tab 2</a>
    <a role="tab" class="tab">Tab 3</a>
</x-dui::tab>
```

### tabs-lift 样式

```blade
<x-dui::tab variant="lift">
    <a role="tab" class="tab">Tab 1</a>
    <a role="tab" class="tab tab-active">Tab 2</a>
    <a role="tab" class="tab">Tab 3</a>
</x-dui::tab>
```

### tabs-box 样式

```blade
<x-dui::tab variant="box">
    <a role="tab" class="tab">Tab 1</a>
    <a role="tab" class="tab tab-active">Tab 2</a>
    <a role="tab" class="tab">Tab 3</a>
</x-dui::tab>
```

### 不同尺寸

```blade
<x-dui::tab variant="lift" size="xs">
    <a role="tab" class="tab">Xsmall</a>
    <a role="tab" class="tab tab-active">Xsmall</a>
    <a role="tab" class="tab">Xsmall</a>
</x-dui::tab>

<x-dui::tab variant="lift" size="lg">
    <a role="tab" class="tab">Large</a>
    <a role="tab" class="tab tab-active">Large</a>
    <a role="tab" class="tab">Large</a>
</x-dui::tab>
```

### Radio tabs-border + tab content

```blade
<x-dui::tab variant="border">
    <input type="radio" name="my_tabs" class="tab" aria-label="Tab 1" />
    <x-dui::tab.content class="border-base-300 bg-base-100 p-10">Tab content 1</x-dui::tab.content>

    <input type="radio" name="my_tabs" class="tab" aria-label="Tab 2" checked="checked" />
    <x-dui::tab.content class="border-base-300 bg-base-100 p-10">Tab content 2</x-dui::tab.content>

    <input type="radio" name="my_tabs" class="tab" aria-label="Tab 3" />
    <x-dui::tab.content class="border-base-300 bg-base-100 p-10">Tab content 3</x-dui::tab.content>
</x-dui::tab>
```

### Radio tabs-lift + tab content

```blade
<x-dui::tab variant="lift">
    <input type="radio" name="my_tabs_lift" class="tab" aria-label="Tab 1" />
    <x-dui::tab.content class="bg-base-100 border-base-300 p-6">Tab content 1</x-dui::tab.content>

    <input type="radio" name="my_tabs_lift" class="tab" aria-label="Tab 2" checked="checked" />
    <x-dui::tab.content class="bg-base-100 border-base-300 p-6">Tab content 2</x-dui::tab.content>

    <input type="radio" name="my_tabs_lift" class="tab" aria-label="Tab 3" />
    <x-dui::tab.content class="bg-base-100 border-base-300 p-6">Tab content 3</x-dui::tab.content>
</x-dui::tab>
```

### Tabs 在底部

```blade
<x-dui::tab variant="lift" placement="bottom">
    <input type="radio" name="my_tabs_bottom" class="tab" aria-label="Tab 1" />
    <x-dui::tab.content class="bg-base-100 border-base-300 p-6">Tab content 1</x-dui::tab.content>

    <input type="radio" name="my_tabs_bottom" class="tab" aria-label="Tab 2" checked="checked" />
    <x-dui::tab.content class="bg-base-100 border-base-300 p-6">Tab content 2</x-dui::tab.content>
</x-dui::tab>
```

## 渲染结果

```html
<div class="tabs tabs-lift tabs-lg" role="tablist">
    <a role="tab" class="tab">Tab 1</a>
    <a role="tab" class="tab tab-active">Tab 2</a>
    <a role="tab" class="tab">Tab 3</a>
</div>

<!-- With tab content -->
<div class="tabs tabs-border" role="tablist">
    <input type="radio" name="my_tabs" class="tab" aria-label="Tab 1" />
    <div class="tab-content border-base-300 bg-base-100 p-10">Tab content 1</div>

    <input type="radio" name="my_tabs" class="tab" aria-label="Tab 2" checked="checked" />
    <div class="tab-content border-base-300 bg-base-100 p-10">Tab content 2</div>
</div>
```
