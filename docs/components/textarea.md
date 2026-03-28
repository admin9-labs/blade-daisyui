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
| validator | bool | false | 为元素添加 `validator` class |

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

### 验证态
```blade
<x-dui::textarea :validator="true" required placeholder="Review note"></x-dui::textarea>
<x-dui::validator.hint>Required</x-dui::validator.hint>
```

## 渲染结果
```html
<textarea class="textarea" placeholder="Bio"></textarea>
<textarea class="textarea textarea-primary" placeholder="Primary"></textarea>
<textarea class="textarea textarea-lg textarea-ghost" placeholder="Bio"></textarea>
<textarea class="textarea validator" required placeholder="Review note"></textarea>
```

## 使用建议

### Best used for

- 需要描述性输入的审核页、设置页、内容后台
- 和 `neutral` 表单组合搭配，维持 calm hierarchy
- 与 validator hint 配合，表达输入质量要求

### Avoid when

- 仅靠 placeholder 承载长说明
- 在没有外层边界的面板里使用 `ghost`
- 给 textarea 过大的视觉强调，抢走主动作的注意力
