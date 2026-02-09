# Label

DaisyUI [Label](https://daisyui.com/components/label/) 的 Blade 封装。

## 用法

```blade
<x-dui::label>Label text</x-dui::label>
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| — | — | — | 无自定义 props，支持所有 HTML 属性 |

## 子组件

### `<x-dui::label.floating>`

浮动标签，当输入框获得焦点时标签浮动到上方。

| Prop | Type | Default | Values |
|------|------|---------|--------|
| — | — | — | 无自定义 props，支持所有 HTML 属性 |

## 示例

### 输入框内的标签
```blade
<label class="input">
  <x-dui::label>https://</x-dui::label>
  <input type="text" placeholder="URL" />
</label>
```

### 输入框末尾的标签
```blade
<label class="input">
  <input type="text" placeholder="domain name" />
  <x-dui::label>.com</x-dui::label>
</label>
```

### Fieldset 中的描述标签
```blade
<x-dui::fieldset>
  <x-dui::fieldset.legend>Page title</x-dui::fieldset.legend>
  <x-dui::input placeholder="My awesome page" />
  <x-dui::label>You can edit page title later on from settings</x-dui::label>
</x-dui::fieldset>
```

### 浮动标签
```blade
<x-dui::label.floating>
  <span>Your Email</span>
  <x-dui::input type="email" placeholder="mail@site.com" size="md" />
</x-dui::label.floating>
```

### 不同尺寸的浮动标签
```blade
<x-dui::label.floating>
  <x-dui::input size="xs" placeholder="Extra Small" />
  <span>Extra Small</span>
</x-dui::label.floating>

<x-dui::label.floating>
  <x-dui::input size="sm" placeholder="Small" />
  <span>Small</span>
</x-dui::label.floating>

<x-dui::label.floating>
  <x-dui::input size="lg" placeholder="Large" />
  <span>Large</span>
</x-dui::label.floating>
```

## 渲染结果
```html
<span class="label">Label text</span>
<label class="floating-label">
  <span>Your Email</span>
  <input type="email" class="input input-md" placeholder="mail@site.com" />
</label>
```
