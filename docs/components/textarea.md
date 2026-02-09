# Textarea

DaisyUI [Textarea](https://daisyui.com/components/textarea/) 的 Blade 封装。

## 用法

```blade
<x-dui::textarea placeholder="Bio"></x-dui::textarea>
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| color | string | null | neutral, primary, secondary, accent, info, success, warning, error |
| size | string | null | xs, sm, md, lg, xl |
| ghost | bool | false | — |

## 示例

### 基本用法
```blade
<x-dui::textarea placeholder="Bio"></x-dui::textarea>
```

### Ghost 样式
```blade
<x-dui::textarea :ghost="true" placeholder="Bio"></x-dui::textarea>
```

### 颜色
```blade
<x-dui::textarea color="primary" placeholder="Primary"></x-dui::textarea>
<x-dui::textarea color="secondary" placeholder="Secondary"></x-dui::textarea>
<x-dui::textarea color="accent" placeholder="Accent"></x-dui::textarea>
<x-dui::textarea color="neutral" placeholder="Neutral"></x-dui::textarea>
<x-dui::textarea color="info" placeholder="Info"></x-dui::textarea>
<x-dui::textarea color="success" placeholder="Success"></x-dui::textarea>
<x-dui::textarea color="warning" placeholder="Warning"></x-dui::textarea>
<x-dui::textarea color="error" placeholder="Error"></x-dui::textarea>
```

### 尺寸
```blade
<x-dui::textarea size="xs" placeholder="Xsmall"></x-dui::textarea>
<x-dui::textarea size="sm" placeholder="Small"></x-dui::textarea>
<x-dui::textarea size="md" placeholder="Medium"></x-dui::textarea>
<x-dui::textarea size="lg" placeholder="Large"></x-dui::textarea>
<x-dui::textarea size="xl" placeholder="Xlarge"></x-dui::textarea>
```

### 配合 Fieldset 和 Label 使用
```blade
<x-dui::fieldset>
  <x-dui::fieldset.legend>Your bio</x-dui::fieldset.legend>
  <x-dui::textarea class="h-24" placeholder="Bio"></x-dui::textarea>
  <x-dui::label>Optional</x-dui::label>
</x-dui::fieldset>
```

### 禁用
```blade
<x-dui::textarea placeholder="Bio" disabled></x-dui::textarea>
```

## 渲染结果
```html
<textarea class="textarea" placeholder="Bio"></textarea>
<textarea class="textarea textarea-primary" placeholder="Primary"></textarea>
<textarea class="textarea textarea-lg textarea-ghost" placeholder="Bio"></textarea>
```
